"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");

var body = document.querySelector("body");
var darkModeButton = document.querySelector(".theme-controller");
console.log("LOAD !!");
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
  console.log("LOAD !! 222");
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

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./assets/app.js"));
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7O0FBQTBCO0FBRTFCLElBQU1BLElBQUksR0FBR0MsUUFBUSxDQUFDQyxhQUFhLENBQUMsTUFBTSxDQUFDO0FBQzNDLElBQU1DLGNBQWMsR0FBR0YsUUFBUSxDQUFDQyxhQUFhLENBQUMsbUJBQW1CLENBQUM7QUFFbEVFLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDLFNBQVMsQ0FBQztBQUV0QkYsY0FBYyxDQUFDRyxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsWUFBTTtFQUMzQyxJQUFNQyxhQUFhLEdBQUdKLGNBQWMsQ0FBQ0ssT0FBTztFQUU1QyxJQUFJRCxhQUFhLEVBQUU7SUFDZlAsSUFBSSxDQUFDUyxPQUFPLENBQUNDLEtBQUssR0FBRyxNQUFNO0lBQzNCQyxZQUFZLENBQUNDLE9BQU8sQ0FBQyxPQUFPLEVBQUUsTUFBTSxDQUFDO0VBQ3pDLENBQUMsTUFBTTtJQUNIWixJQUFJLENBQUNTLE9BQU8sQ0FBQ0MsS0FBSyxHQUFHLE9BQU87SUFDNUJDLFlBQVksQ0FBQ0MsT0FBTyxDQUFDLE9BQU8sRUFBRSxPQUFPLENBQUM7RUFDMUM7QUFDSixDQUFDLENBQUM7QUFFRkMsTUFBTSxDQUFDUCxnQkFBZ0IsQ0FBQyxNQUFNLEVBQUUsVUFBQ1EsS0FBSyxFQUFLO0VBQ3ZDVixPQUFPLENBQUNDLEdBQUcsQ0FBQyxhQUFhLENBQUM7RUFDMUIsSUFBTVUsVUFBVSxHQUFHSixZQUFZLENBQUNLLE9BQU8sQ0FBQyxPQUFPLENBQUM7RUFFaEQsSUFBSUQsVUFBVSxFQUFFO0lBQ1pmLElBQUksQ0FBQ1MsT0FBTyxDQUFDQyxLQUFLLEdBQUdLLFVBQVU7SUFFL0IsSUFBSUEsVUFBVSxLQUFLLE1BQU0sRUFBRTtNQUN2QlosY0FBYyxDQUFDSyxPQUFPLEdBQUcsSUFBSTtJQUNqQyxDQUFDLE1BQU07TUFDSEwsY0FBYyxDQUFDSyxPQUFPLEdBQUcsS0FBSztJQUNsQztFQUNKLENBQUMsTUFBTTtJQUNIUixJQUFJLENBQUNTLE9BQU8sQ0FBQ0MsS0FBSyxHQUFHLE9BQU87SUFDNUJQLGNBQWMsQ0FBQ0ssT0FBTyxHQUFHLEtBQUs7RUFDbEM7QUFDSixDQUFDLENBQUMsQzs7Ozs7Ozs7Ozs7QUNuQ0YiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYXBwLmNzcz82YmU2Il0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBcIi4vc3R5bGVzL2FwcC5jc3NcIjtcblxuY29uc3QgYm9keSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCJib2R5XCIpO1xuY29uc3QgZGFya01vZGVCdXR0b24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLnRoZW1lLWNvbnRyb2xsZXJcIik7XG5cbmNvbnNvbGUubG9nKFwiTE9BRCAhIVwiKTtcblxuZGFya01vZGVCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+IHtcbiAgICBjb25zdCBpc0J1dHRvbkNoZWNrID0gZGFya01vZGVCdXR0b24uY2hlY2tlZDtcblxuICAgIGlmIChpc0J1dHRvbkNoZWNrKSB7XG4gICAgICAgIGJvZHkuZGF0YXNldC50aGVtZSA9IFwiZGFya1wiO1xuICAgICAgICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbShcInRoZW1lXCIsIFwiZGFya1wiKTtcbiAgICB9IGVsc2Uge1xuICAgICAgICBib2R5LmRhdGFzZXQudGhlbWUgPSBcImxpZ2h0XCI7XG4gICAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKFwidGhlbWVcIiwgXCJsaWdodFwiKTtcbiAgICB9XG59KTtcblxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJsb2FkXCIsIChldmVudCkgPT4ge1xuICAgIGNvbnNvbGUubG9nKFwiTE9BRCAhISAyMjJcIik7XG4gICAgY29uc3Qgc2F2ZWRUaGVtZSA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKFwidGhlbWVcIik7XG5cbiAgICBpZiAoc2F2ZWRUaGVtZSkge1xuICAgICAgICBib2R5LmRhdGFzZXQudGhlbWUgPSBzYXZlZFRoZW1lO1xuXG4gICAgICAgIGlmIChzYXZlZFRoZW1lID09PSBcImRhcmtcIikge1xuICAgICAgICAgICAgZGFya01vZGVCdXR0b24uY2hlY2tlZCA9IHRydWU7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICBkYXJrTW9kZUJ1dHRvbi5jaGVja2VkID0gZmFsc2U7XG4gICAgICAgIH1cbiAgICB9IGVsc2Uge1xuICAgICAgICBib2R5LmRhdGFzZXQudGhlbWUgPSBcImxpZ2h0XCI7XG4gICAgICAgIGRhcmtNb2RlQnV0dG9uLmNoZWNrZWQgPSBmYWxzZTtcbiAgICB9XG59KTtcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJib2R5IiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiZGFya01vZGVCdXR0b24iLCJjb25zb2xlIiwibG9nIiwiYWRkRXZlbnRMaXN0ZW5lciIsImlzQnV0dG9uQ2hlY2siLCJjaGVja2VkIiwiZGF0YXNldCIsInRoZW1lIiwibG9jYWxTdG9yYWdlIiwic2V0SXRlbSIsIndpbmRvdyIsImV2ZW50Iiwic2F2ZWRUaGVtZSIsImdldEl0ZW0iXSwic291cmNlUm9vdCI6IiJ9