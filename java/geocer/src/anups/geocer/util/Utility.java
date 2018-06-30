/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package anups.geocer.util;

import com.mysql.jdbc.Connection;
import com.mysql.jdbc.Statement;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLConnection;
import java.sql.DriverManager;

/**
 *
 * @author N.L.N.Rao
 */
public class Utility {
 public static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";  
 public static final String DB_URL = "jdbc:mysql://localhost:3306/geocer";
 public static final String USER = "root";
 public static final String PASS = "";
 
 public String getDataFromURL(String website){
   StringBuilder sb=new StringBuilder();
   try {
    URL url = new URL(website);
    URLConnection conn = url.openConnection();
    BufferedReader br = new BufferedReader(new InputStreamReader(conn.getInputStream()));
    for(String inputLine="";(inputLine = br.readLine()) != null;) {
      sb.append(inputLine.trim());
    }
    br.close();
    } catch (MalformedURLException e) { e.printStackTrace(); }
      catch (IOException e) {  e.printStackTrace(); }
  return sb.toString();
 }
 public void executeQuery(String sql){
   Connection conn = null;
   Statement stmt = null;
   try{
      Class.forName("com.mysql.jdbc.Driver");
      conn = (Connection) DriverManager.getConnection(DB_URL, USER, PASS);
      stmt = (Statement) conn.createStatement();
      stmt.executeUpdate(sql);
   }
   catch(Exception se){ se.printStackTrace(); }
   finally{
      try{  if(stmt!=null) {  conn.close(); }
            if(conn!=null) { conn.close();  }
      }catch(Exception se){ se.printStackTrace(); }  
   }
 }
 
 public static void main(String args[]){
     Utility dbObj=new Utility();
     String data=dbObj.getDataFromURL("http://localhost/geocer/php/english/countries/India/viewAllStates.json");
     System.out.println(data);
   //  StringBuilder sql=new StringBuilder();
   //  sql.append("");
   //  .executeQuery(sql.toString());
 }
}
