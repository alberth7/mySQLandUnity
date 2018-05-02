using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class enlace : MonoBehaviour {

	public string web;

	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	public void ir_a_web(){
		Application.OpenURL (web);
	}
}
