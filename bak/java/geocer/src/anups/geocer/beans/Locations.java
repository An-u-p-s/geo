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
public class Locations {
  private List<Location> location = null;

  public List<Location> getLocation() {
    return location;
  }

  public void setLocation(List<Location> location) {
    this.location = location;
  }
  
  public class Location {
      private String locationName;
      private String locationValue;

      public String getLocationName() {
        return locationName;
      }

      public void setLocationName(String locationName) {
         this.locationName = locationName;
      }

      public String getLocationValue() {
         return locationValue;
      }

      public void setLocationValue(String locationValue) {
         this.locationValue = locationValue;
      }
  }
}
