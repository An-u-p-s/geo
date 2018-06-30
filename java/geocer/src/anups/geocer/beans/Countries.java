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
public class Countries {
   private List<Country> countries = null;

   public List<Country> getCountries() {
    return countries;
   }

   public void setCountries(List<Country> countries) {
     this.countries = countries;
   }

   public class Country {
      private String countryName;
      private String countryValue;
      private String phonecode;
      private String timezone;

      public String getCountryName() {
         return countryName;
      }

      public void setCountryName(String countryName) {
        this.countryName = countryName;
      }

      public String getCountryValue() {
        return countryValue;
      }

      public void setCountryValue(String countryValue) {
         this.countryValue = countryValue;
      }

      public String getPhonecode() {
        return phonecode;
      }

      public void setPhonecode(String phonecode) {
         this.phonecode = phonecode;
      }

      public String getTimezone() {
         return timezone;
      }

      public void setTimezone(String timezone) {
         this.timezone = timezone;
      }
}

}
