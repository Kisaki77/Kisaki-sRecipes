import React from "react";
import "./App.css";
import SearchFilter from "./SearchFilter"; // Import the new component

function App() {
 
  return (
    <>
      {/* Render the SearchFilter component inside the placeholder div */}
      <div id="search-filter-root">
        <SearchFilter />
      </div>
    </>
  );
}

export default App;
