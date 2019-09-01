/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package anups.geocer.util;

import java.io.UnsupportedEncodingException;
import java.net.URLEncoder;

/**
 *
 * @author N.L.N.Rao
 */
public class URLGenerator {
    
    public static final String LOCAL_URL="http://localhost/";
    
    public String getCountryURL(){
       StringBuilder sb=new StringBuilder();
       sb.append(LOCAL_URL).append("geocer/php/english/countries/countries.json");
       return sb.toString();
    }
    
    public String getStatesURL(String country){
      StringBuilder sb=new StringBuilder();
      sb.append(LOCAL_URL).append("geocer/php/english/countries/").append(country.replaceAll(" ", "%20")).append("/viewAllStates.json");
      return sb.toString();
    }
    
    public String getLocationURL(String country, String state){
      StringBuilder sb=new StringBuilder();
      sb.append(LOCAL_URL).append("geocer/php/english/countries/")
        .append(country.replaceAll(" ", "%20")).append("/").append(state.replaceAll(" ", "%20")).append("/viewAllLocations.json");
      return sb.toString();  
    }
    
    public String getMinLocationURL(String country, String state, String location){
      StringBuilder sb=new StringBuilder();
      sb.append(LOCAL_URL).append("geocer/php/english/countries/")
              .append(country.replaceAll(" ", "%20")).append("/")
              .append(state.replaceAll(" ", "%20")).append("/")
              .append(location.replaceAll(" ", "%20")).append("/ViewAllMinLocations.json");
      // 
      return sb.toString();  
    }
    
}
