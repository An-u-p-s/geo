/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package anups.geocer.beans;

import java.util.List;

/**
 *
 * @author N.L.N.Rao
 */
public class MinLocations {
  private List<MinLocation> minLocations = null;
  public List<MinLocation> getMinLocations() {
    return minLocations;
  }
  public void setMinLocations(List<MinLocation> minLocations) {
   this.minLocations = minLocations;
  }
  
  public class MinLocation{
    private String minlocationName;
    private String minlocationValue;
    public String getMinlocationName() {
       return minlocationName;
    }
    public void setMinlocationName(String minlocationName) {
       this.minlocationName = minlocationName;
    }
    public String getMinlocationValue() {
       return minlocationValue;
    }
    public void setMinlocationValue(String minlocationValue) {
      this.minlocationValue = minlocationValue;
    } 
  }  
  
}
