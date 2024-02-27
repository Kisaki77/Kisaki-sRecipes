import React, {useState} from "react";
import data from "./Data.json";

function SearchFilter() {
 
  // 'useState' hook to manage the 'searchTerm' state variable. It represent the value entered in the search bar
  const [searchTerm, setSearchTerm] = useState("");

  return (
      <div className="searchbar">
        {/* This div is for the search section where we get the value entered*/ }
        <div className="search-container">
            <input type="text" placeholder="Search..." id="searchBar" name="searchBar" onChange={(event) => {
              setSearchTerm(event.target.value);
            }}
            />
        </div>

        <div className="template_Container">
          {data
              .filter((val)=> {
                if (searchTerm === ""){
                  return true;
                }
                else if (val.title.toLowerCase().includes(searchTerm.toLowerCase())){
                  return true;
                }
                return false;
              }) 
              .map((val) => {
                return (
                  <div className="template" key={val.id}>
                    <img class="imge" src={process.env.PUBLIC_URL + val.image} alt="" />
                    <h3>{val.title}</h3>
                  </div>
                );
              })}
        </div>
      </div>
  );
}

export default SearchFilter;