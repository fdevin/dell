function clickTabbar() {
  document.getElementById("myDropdown").classList.toggle("show");
  document.getElementById("tab-btn").classList.toggle("show-tab");
}

function clickTabbarSub() {
  document.getElementById("item-sub-1").classList.toggle("show");
  document.getElementById("tab-sub-btn").classList.toggle("show-tab");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  
};

function clickFilter() {
  var filterDiv = document.getElementById("mobile-community").getElementsByClassName("search-panel-mobile")[0];
  if (filterDiv.style.display === 'none') {
    filterDiv.style.display = 'block';
  }
  else {
    filterDiv.style.display = 'none';    
  }
}

function closeFilter() {
  var filterDiv = document.getElementById("mobile-community").getElementsByClassName("search-panel-mobile")[0];
  if (filterDiv.style.display === 'block') {
    filterDiv.style.display = 'none';
  }
  else {
    filterDiv.style.display = 'block';    
  }
}