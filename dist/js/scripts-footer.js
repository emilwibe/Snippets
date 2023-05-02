"use strict";

{
  var searchIcon = document.getElementById('search-icon'),
    searchInput = document.getElementById('search-input');
  searchIcon.addEventListener("click", function (e) {
    searchInput.classList.toggle("is-hidden");
    searchInput.focus();
  }, false);
}