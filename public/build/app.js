(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ (() => {

var body = document.querySelector("body");
var darkModeButton = document.querySelector(".theme-controller");
darkModeButton.addEventListener("click", function () {
  var isButtonCheck = darkModeButton.checked;
  if (isButtonCheck) {
    body.dataset.theme = "dark";
    localStorage.setItem("theme", "dark");
  } else {
    body.dataset.theme = "light";
    localStorage.setItem("theme", "light");
  }
});
window.addEventListener("load", function (event) {
  var savedTheme = localStorage.getItem("theme");
  if (savedTheme) {
    body.dataset.theme = savedTheme;
    if (savedTheme === "dark") {
      darkModeButton.checked = true;
    } else {
      darkModeButton.checked = false;
    }
  } else {
    body.dataset.theme = "light";
    darkModeButton.checked = false;
  }
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./assets/app.js"));
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7O0FBQUEsSUFBTUEsSUFBSSxHQUFHQyxRQUFRLENBQUNDLGFBQWEsQ0FBQyxNQUFNLENBQUM7QUFDM0MsSUFBTUMsY0FBYyxHQUFHRixRQUFRLENBQUNDLGFBQWEsQ0FBQyxtQkFBbUIsQ0FBQztBQUVsRUMsY0FBYyxDQUFDQyxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsWUFBTTtFQUMzQyxJQUFNQyxhQUFhLEdBQUdGLGNBQWMsQ0FBQ0csT0FBTztFQUU1QyxJQUFJRCxhQUFhLEVBQUU7SUFDZkwsSUFBSSxDQUFDTyxPQUFPLENBQUNDLEtBQUssR0FBRyxNQUFNO0lBQzNCQyxZQUFZLENBQUNDLE9BQU8sQ0FBQyxPQUFPLEVBQUUsTUFBTSxDQUFDO0VBQ3pDLENBQUMsTUFBTTtJQUNIVixJQUFJLENBQUNPLE9BQU8sQ0FBQ0MsS0FBSyxHQUFHLE9BQU87SUFDNUJDLFlBQVksQ0FBQ0MsT0FBTyxDQUFDLE9BQU8sRUFBRSxPQUFPLENBQUM7RUFDMUM7QUFDSixDQUFDLENBQUM7QUFFRkMsTUFBTSxDQUFDUCxnQkFBZ0IsQ0FBQyxNQUFNLEVBQUUsVUFBQ1EsS0FBSyxFQUFLO0VBQ3ZDLElBQU1DLFVBQVUsR0FBR0osWUFBWSxDQUFDSyxPQUFPLENBQUMsT0FBTyxDQUFDO0VBRWhELElBQUlELFVBQVUsRUFBRTtJQUNaYixJQUFJLENBQUNPLE9BQU8sQ0FBQ0MsS0FBSyxHQUFHSyxVQUFVO0lBRS9CLElBQUlBLFVBQVUsS0FBSyxNQUFNLEVBQUU7TUFDdkJWLGNBQWMsQ0FBQ0csT0FBTyxHQUFHLElBQUk7SUFDakMsQ0FBQyxNQUFNO01BQ0hILGNBQWMsQ0FBQ0csT0FBTyxHQUFHLEtBQUs7SUFDbEM7RUFDSixDQUFDLE1BQU07SUFDSE4sSUFBSSxDQUFDTyxPQUFPLENBQUNDLEtBQUssR0FBRyxPQUFPO0lBQzVCTCxjQUFjLENBQUNHLE9BQU8sR0FBRyxLQUFLO0VBQ2xDO0FBQ0osQ0FBQyxDQUFDLEMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIl0sInNvdXJjZXNDb250ZW50IjpbImNvbnN0IGJvZHkgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiYm9keVwiKTtcbmNvbnN0IGRhcmtNb2RlQnV0dG9uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi50aGVtZS1jb250cm9sbGVyXCIpO1xuXG5kYXJrTW9kZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKCkgPT4ge1xuICAgIGNvbnN0IGlzQnV0dG9uQ2hlY2sgPSBkYXJrTW9kZUJ1dHRvbi5jaGVja2VkO1xuXG4gICAgaWYgKGlzQnV0dG9uQ2hlY2spIHtcbiAgICAgICAgYm9keS5kYXRhc2V0LnRoZW1lID0gXCJkYXJrXCI7XG4gICAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKFwidGhlbWVcIiwgXCJkYXJrXCIpO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIGJvZHkuZGF0YXNldC50aGVtZSA9IFwibGlnaHRcIjtcbiAgICAgICAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oXCJ0aGVtZVwiLCBcImxpZ2h0XCIpO1xuICAgIH1cbn0pO1xuXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcImxvYWRcIiwgKGV2ZW50KSA9PiB7XG4gICAgY29uc3Qgc2F2ZWRUaGVtZSA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKFwidGhlbWVcIik7XG5cbiAgICBpZiAoc2F2ZWRUaGVtZSkge1xuICAgICAgICBib2R5LmRhdGFzZXQudGhlbWUgPSBzYXZlZFRoZW1lO1xuXG4gICAgICAgIGlmIChzYXZlZFRoZW1lID09PSBcImRhcmtcIikge1xuICAgICAgICAgICAgZGFya01vZGVCdXR0b24uY2hlY2tlZCA9IHRydWU7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICBkYXJrTW9kZUJ1dHRvbi5jaGVja2VkID0gZmFsc2U7XG4gICAgICAgIH1cbiAgICB9IGVsc2Uge1xuICAgICAgICBib2R5LmRhdGFzZXQudGhlbWUgPSBcImxpZ2h0XCI7XG4gICAgICAgIGRhcmtNb2RlQnV0dG9uLmNoZWNrZWQgPSBmYWxzZTtcbiAgICB9XG59KTtcbiJdLCJuYW1lcyI6WyJib2R5IiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiZGFya01vZGVCdXR0b24iLCJhZGRFdmVudExpc3RlbmVyIiwiaXNCdXR0b25DaGVjayIsImNoZWNrZWQiLCJkYXRhc2V0IiwidGhlbWUiLCJsb2NhbFN0b3JhZ2UiLCJzZXRJdGVtIiwid2luZG93IiwiZXZlbnQiLCJzYXZlZFRoZW1lIiwiZ2V0SXRlbSJdLCJzb3VyY2VSb290IjoiIn0=