/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package anups.geocer.main;

import anups.geocer.beans.Countries;
import anups.geocer.beans.Locations;
import anups.geocer.beans.MinLocations;
import anups.geocer.beans.States;
import anups.geocer.util.QueryGenerator;
import anups.geocer.util.URLGenerator;
import anups.geocer.util.Utility;
import com.google.gson.Gson;
import java.util.ArrayList;
import java.util.Random;

/**
 *
 * @author N.L.N.Rao
 */
public class RunLocations {
   
   public Countries getCountriesList(){
       URLGenerator urlGenerator=new URLGenerator();
       Utility utility = new Utility();
       Gson gson = new Gson(); 
       
       String countriesJson = utility.getDataFromURL(urlGenerator.getCountryURL());
       Countries countries = gson.fromJson(countriesJson, Countries.class);
       return countries;
   }
   
   public States getStatesList(String countryName){
       
       URLGenerator urlGenerator=new URLGenerator();
       Utility utility = new Utility();
       Gson gson = new Gson(); 
       
       String statesJson=utility.getDataFromURL(urlGenerator.getStatesURL(countryName));
       States states = gson.fromJson(statesJson, States.class);
       
       return states;
   }
   
   public Locations getLocationList(String countryName, String stateName){
       URLGenerator urlGenerator=new URLGenerator();
       Utility utility = new Utility();
       Gson gson = new Gson();
       
       String locationJson=utility.getDataFromURL(urlGenerator.getLocationURL(countryName,stateName));  
       Locations locations = gson.fromJson(locationJson, Locations.class);
       
       return locations;
   }
   
   public MinLocations getMinLocationList(String countryName, String stateName, String location){
       URLGenerator urlGenerator=new URLGenerator();
       Utility utility = new Utility();
       Gson gson = new Gson();
       
       String minlocationJson=utility.getDataFromURL(urlGenerator.getMinLocationURL(countryName, stateName, location));
       MinLocations minlocations = gson.fromJson(minlocationJson, MinLocations.class);
       
       return minlocations;
   }
   
   public static void main(String args[]){
       Utility utility = new Utility();
       RunLocations runlocations =new RunLocations();
       QueryGenerator queryGenerator = new QueryGenerator();
       int identity=100000000;
       Countries countries = runlocations.getCountriesList();
       int totalLocations=0;
       for(int countryIndex=0;countryIndex<countries.getCountries().size();countryIndex++){
          String countryName = countries.getCountries().get(countryIndex).getCountryValue();
          
          States states = runlocations.getStatesList(countryName);
          for(int statesIndex=0;statesIndex<states.getStates().size();statesIndex++){
              String stateName = states.getStates().get(statesIndex).getStateValue();
              
              Locations locations = runlocations.getLocationList(countryName, stateName);
              int index=0;
              for(int locationsIndex=0;locationsIndex<locations.getLocation().size();locationsIndex++){
                  
                  String location_Id="LOC"+identity;
                  String locationType="PARLIAMENT";
                  String locationName=locations.getLocation().get(locationsIndex).getLocationValue();
                  
                  String query = queryGenerator.queryLocationBuilder(location_Id, stateName, locationType, locationName);
                  System.out.println(query);
               //   utility.executeQuery(query);
                 /* MinLocations minLocations = runlocations.getMinLocationList(countryName, stateName, locationName);
                  for(int minlocationsIndex=0;minlocationsIndex<minLocations.getMinLocations().size();minlocationsIndex++){
                      String minlocationName = minLocations.getMinLocations().get(minlocationsIndex).getMinlocationValue();
                  } */
                  identity++;
                  index++;
              }
              totalLocations+=index;
              
          //  System.out.println(stateName+" : "+index);
          }
       }
      // System.out.println("Total : "+totalLocations);            
   }
}
