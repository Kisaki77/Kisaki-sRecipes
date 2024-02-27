<?php 
    phpinfo();
?>

[
    {
        "id": 1,
        "image": "images/pasta&mince.jpg",
        "title": "Pasta and Mince"
    },
    {
        "id": 2,
        "image": "images/mince2.jpg",
        "title": "Delicious mince topped with boiled eggs" 
    },
    {
        "id": 3,
        "image": "images/pizza1.jpg",
        "title": "Pizza" 
    }
]

import React, {useState} from "react";
import logo from './logo.svg';
import './css/styles.css';
import data from "./TemplateData.json";

function App() {
  const [searchTerm, setSearchTerm] = useState("");
  return (
    <>
      <div className="templateContainer">
        {/* This div is for the search section where we get the value entered*/}
        <div className="search-container">
            <input type="text" placeholder="Search..." id="searchBar" name="searchBar" onChange={(event) => {
              setSearchTerm(event.target.value);
            }}/>
        </div>

        <div className="template_Container">
          {
            // filtering the value to give back the value entered
            data
              .filter((val)=> {
                if(searchTerm == ""){
                  return val;
                }
                else if(val.title.toLowerCase().includes(searchTerm.toLowerCase())){
                  return val;
                }
              })
              // mapping 
              .map((val) => {
                return(
                  <div className="template" key={val.id}>
                    <img src={val.image} alt="" />
                    <h3>{val.title}</h3>
                  </div>
                )
              })
          }
        </div>
      </div>
    </>
  );
}

export default App;