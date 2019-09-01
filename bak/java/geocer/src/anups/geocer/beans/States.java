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
public class States {
  private List<State> states = null;

  public List<State> getStates() {
   return states;
  }

  public void setStates(List<State> states) {
   this.states = states;
  }

  public class State {
    private String stateName;
    private String stateValue;
    public String getStateName() {
      return stateName;
    }
    public void setStateName(String stateName) {
      this.stateName = stateName;
    }
    public String getStateValue() {
      return stateValue;
    }
    public void setStateValue(String stateValue) {
      this.stateValue = stateValue;
    }
  }
 
}