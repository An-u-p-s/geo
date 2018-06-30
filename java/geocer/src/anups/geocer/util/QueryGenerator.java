/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package anups.geocer.util;

/**
 *
 * @author N.L.N.Rao
 */
public class QueryGenerator {
    
    public String queryLocationBuilder(String location_Id, String stateName,
            String locationType, String eng_locationName){
        StringBuilder sb=new StringBuilder();
        sb.append("INSERT INTO locations(location_Id, state_Id, locationType, eng_locationName) ");
        sb.append("SELECT location_Id, state_Id, locationType, eng_locationName FROM ");
        sb.append("(SELECT '").append(location_Id).append("' As location_Id, ")
                .append("(SELECT state_Id FROM states WHERE eng_stateName='").append(stateName).append("') As state_Id, '")
                .append(locationType).append("' As locationType, '")
                .append(eng_locationName).append("' As eng_locationName")
                .append(") As tmp");
        sb.append(" WHERE (SELECT count(*) FROM locations WHERE state_Id=")
                .append("(SELECT state_Id FROM states WHERE eng_stateName='").append(stateName).append("')").append(" AND eng_locationName='")
                .append(eng_locationName).append("')=0;");
      return sb.toString();
    }
}
