<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<header class="header">

   <div class="flex">
      
   <a href="home.php" class="harmonixlogo">
      <!-- <a href="admin_page.php" class="logo"> -->
     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="125" zoomAndPan="magnify" viewBox="0 0 93.75 30.000001" height="40" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/><clipPath id="5bae2295ec"><path d="M 1.390625 0 L 92.117188 0 L 92.117188 29.03125 L 1.390625 29.03125 Z M 1.390625 0 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#5bae2295ec)"><path fill="#ffffff" d="M 1.390625 0 L 92.359375 0 L 92.359375 36.386719 L 1.390625 36.386719 Z M 1.390625 0 " fill-opacity="1" fill-rule="nonzero"/><path fill="#ffffff" d="M 1.390625 0 L 92.359375 0 L 92.359375 29.109375 L 1.390625 29.109375 Z M 1.390625 0 " fill-opacity="1" fill-rule="nonzero"/><path fill="#ffffff" d="M 1.390625 0 L 92.359375 0 L 92.359375 29.109375 L 1.390625 29.109375 Z M 1.390625 0 " fill-opacity="1" fill-rule="nonzero"/></g><path stroke-linecap="butt" transform="matrix(0.30194, 0, 0, 0.30194, 0.738938, 6.397013)" fill="none" stroke-linejoin="miter" d="M 42.600004 48.997871 L 42.600004 48.609756 C 39.391579 48.131079 38.899966 44.534539 38.899966 38.014194 C 38.899966 27.017579 38.861155 34.650523 38.861155 24.999377 C 38.861155 23.757406 38.861155 22.800054 38.861155 22.075571 L 57.193158 22.075571 C 57.193158 22.800054 57.193158 23.757406 57.193158 24.999377 C 57.193158 34.650523 57.141409 27.017579 57.141409 38.014194 C 57.141409 44.534539 56.662733 48.131079 53.454309 48.609756 L 53.454309 48.997871 L 66.689058 48.997871 L 66.689058 48.609756 C 63.480634 48.131079 63.001958 44.534539 63.001958 38.014194 C 63.001958 29.3204 63.001958 20.678354 63.001958 11.997497 C 63.001958 5.464214 63.480634 1.867674 66.689058 1.388998 L 66.689058 1.000882 L 53.454309 1.000882 L 53.454309 1.388998 C 56.662733 1.867674 57.141409 5.464214 57.141409 11.997497 C 57.141409 20.445485 57.193158 17.896857 57.193158 20.626605 L 38.861155 20.626605 C 38.861155 17.896857 38.899966 20.445485 38.899966 11.997497 C 38.899966 5.464214 39.391579 1.867674 42.600004 1.388998 L 42.600004 1.000882 L 29.352317 1.000882 L 29.352317 1.388998 C 32.560741 1.867674 33.052355 5.464214 33.052355 11.997497 C 33.052355 20.678354 33.052355 29.3204 33.052355 38.014194 C 33.052355 44.534539 32.560741 48.131079 29.352317 48.609756 L 29.352317 48.997871 Z M 68.6167 41.274367 C 68.6167 46.410433 71.928622 49.955224 76.586012 49.955224 C 81.670329 49.955224 85.033999 47.98877 88.203612 44.586288 C 88.384732 47.173727 89.833698 48.997871 92.369388 48.997871 L 97.220836 48.997871 L 97.220836 48.609756 C 93.999474 48.131079 93.520798 44.534539 93.520798 38.014194 C 93.520798 35.413818 93.520798 31.778466 93.520798 28.647665 C 93.520798 21.208779 88.436481 18.039167 80.907034 18.039167 C 75.822717 18.039167 70.207975 20.057369 70.207975 23.071735 C 70.207975 24.378392 71.074767 25.439241 72.601356 25.439241 C 77.116437 25.439241 74.761867 19.229388 80.674165 19.229388 C 84.98225 19.229388 88.151863 21.790953 88.151863 26.681212 L 88.151863 26.927019 C 80.674165 27.017579 68.6167 31.53266 68.6167 41.274367 Z M 73.985636 40.640444 C 73.985636 34.120098 79.665064 28.311298 88.151863 28.117241 L 88.151863 42.658646 C 85.900791 45.45308 83.119295 47.600654 79.134639 47.600654 C 75.292292 47.600654 73.985636 43.486627 73.985636 40.640444 Z M 110.468522 48.997871 L 110.468522 48.609756 C 107.260098 48.131079 106.781422 44.534539 106.781422 38.014194 C 106.781422 36.862784 106.781422 31.959587 106.729673 27.405695 C 107.169538 22.942363 111.671681 21.014721 114.608424 21.014721 C 118.062655 21.014721 120.934712 23.032923 122.720045 27.056391 L 123.108161 27.056391 L 123.108161 20.484296 C 122.241369 19.138828 119.74449 18.039167 117.040617 18.039167 C 112.111546 18.039167 108.45032 21.014721 106.729673 24.080836 C 106.729673 21.635706 106.729673 19.669253 106.729673 18.996519 L 97.751261 18.996519 L 97.751261 19.384635 C 100.959685 19.863311 101.451298 23.459851 101.451298 29.993134 C 101.451298 31.71378 101.399549 35.892494 101.399549 38.014194 C 101.399549 44.534539 100.920873 48.131079 97.712449 48.609756 L 97.712449 48.997871 Z M 123.5739 48.609756 L 123.5739 48.997871 L 134.893944 48.997871 L 134.893944 48.609756 C 131.68552 48.131079 132.65581 44.534539 132.65581 38.014194 L 132.604061 23.847967 C 134.95863 21.545146 138.361112 20.251427 140.896802 20.251427 C 146.045805 20.251427 146.188114 26.099038 146.188114 29.993134 C 146.188114 32.671133 146.226926 35.323257 146.226926 38.014194 C 146.226926 44.534539 145.74825 48.131079 142.539826 48.609756 L 142.539826 48.997871 L 155.295899 48.997871 L 155.295899 48.609756 C 152.087475 48.131079 151.608798 44.534539 151.608798 38.014194 C 151.608798 35.025702 151.569987 32.295954 151.569987 29.3204 C 151.569987 27.159888 151.362992 25.387493 150.987813 23.951464 C 153.329445 21.583958 156.744864 20.251427 159.332303 20.251427 C 164.41662 20.251427 164.623615 26.099038 164.623615 29.993134 C 164.623615 32.671133 164.662427 35.323257 164.662427 38.014194 C 164.662427 44.534539 164.183751 48.131079 160.975327 48.609756 L 160.975327 48.997871 L 173.7314 48.997871 L 173.7314 48.609756 C 170.522976 48.131079 170.0443 44.534539 170.0443 38.014194 C 170.0443 35.025702 169.992551 32.295954 169.992551 29.3204 C 169.992551 20.341987 165.904398 18.039167 160.72952 18.039167 C 156.744864 18.039167 153.238885 19.863311 150.560886 22.644808 C 149.11192 19.100016 146.226926 18.039167 142.294019 18.039167 C 138.55517 18.039167 135.243248 19.669253 132.604061 22.114383 L 132.604061 18.996519 L 123.625648 18.996519 L 123.625648 19.384635 C 126.834072 19.863311 127.364497 23.459851 127.312749 29.993134 L 127.273937 38.014194 C 127.222188 44.534539 126.795261 48.131079 123.5739 48.609756 Z M 175.659042 33.977789 C 175.659042 43.577187 181.558402 49.955224 189.100786 49.955224 C 196.64317 49.955224 202.490782 43.577187 202.490782 33.977789 C 202.490782 24.43014 196.64317 18.039167 189.100786 18.039167 C 181.558402 18.039167 175.659042 24.43014 175.659042 33.977789 Z M 186.746217 19.617504 C 197.535836 19.617504 202.206163 48.376886 191.442418 48.376886 C 180.60105 48.376886 175.94366 19.617504 186.746217 19.617504 Z M 204.405486 48.609756 L 204.405486 48.997871 L 215.738468 48.997871 L 215.738468 48.609756 C 212.517107 48.131079 213.487396 44.534539 213.487396 38.014194 L 213.435648 23.847967 C 215.790217 21.545146 219.192699 20.251427 221.728389 20.251427 C 226.877392 20.251427 227.019701 26.099038 227.019701 29.993134 C 227.019701 32.671133 227.058513 35.323257 227.058513 38.014194 C 227.058513 44.534539 226.579837 48.131079 223.371412 48.609756 L 223.371412 48.997871 L 236.140423 48.997871 L 236.140423 48.609756 C 232.919062 48.131079 232.440385 44.534539 232.440385 38.014194 C 232.440385 35.025702 232.401574 32.295954 232.401574 29.3204 C 232.401574 20.341987 228.313421 18.039167 223.125606 18.039167 C 219.386757 18.039167 216.074835 19.669253 213.435648 22.114383 L 213.435648 18.996519 L 204.457235 18.996519 L 204.457235 19.384635 C 207.665659 19.863311 208.196084 23.459851 208.144335 29.993134 L 208.105524 38.014194 C 208.053775 44.534539 207.626848 48.131079 204.405486 48.609756 Z M 249.388109 48.997871 L 249.388109 48.609756 C 246.166748 48.131079 245.688072 44.534539 245.688072 38.014194 L 245.688072 18.039167 L 245.299956 18.039167 C 244.394352 19.190577 241.703416 21.493397 236.942529 21.493397 L 236.942529 21.881513 C 240.176827 22.360189 240.306199 24.908816 240.306199 29.993134 L 240.306199 38.014194 C 240.306199 44.534539 239.827523 48.131079 236.619099 48.609756 L 236.619099 48.997871 Z M 243.100633 7.288359 C 241.043619 7.288359 239.348847 8.970194 239.348847 10.988396 C 239.348847 13.04541 241.043619 14.727245 243.100633 14.727245 C 245.118835 14.727245 246.787733 13.04541 246.787733 10.988396 C 246.787733 8.970194 245.118835 7.288359 243.100633 7.288359 Z M 248.430757 48.609756 L 248.430757 48.997871 L 256.878744 48.997871 L 256.878744 48.609756 C 252.557722 47.98877 255.623837 43.822994 261.484385 35.607876 C 267.383746 43.822994 270.462798 47.98877 266.128838 48.609756 L 266.128838 48.997871 L 277.655878 48.997871 L 277.655878 48.609756 C 274.576826 47.755901 273.77472 45.310771 265.753659 34.029538 C 265.61135 33.83548 265.507853 33.641422 265.365544 33.499113 C 272.907928 22.502498 274.486265 20.303175 277.655878 19.384635 L 277.655878 18.996519 L 269.20789 18.996519 L 269.20789 19.384635 C 273.528913 20.00562 270.462798 24.184334 264.5505 32.399452 C 258.689952 24.184334 255.623837 20.00562 259.944859 19.384635 L 259.944859 18.996519 L 248.430757 18.996519 L 248.430757 19.384635 C 251.496872 20.251427 252.311915 22.696556 260.332975 33.977789 C 260.475284 34.15891 260.565845 34.365905 260.708154 34.508214 C 253.178707 45.491892 251.587432 47.704152 248.430757 48.609756 Z M 248.430757 48.609756 " stroke="#222f40" stroke-width="3.6" stroke-opacity="1" stroke-miterlimit="4"/><g fill="#2e4056" fill-opacity="1"><g transform="translate(8.877152, 21.192049)"><g><path d="M 4.726562 0 L 4.726562 -0.117188 C 3.753906 -0.261719 3.609375 -1.347656 3.609375 -3.320312 C 3.609375 -6.636719 3.59375 -4.332031 3.59375 -7.246094 C 3.59375 -7.625 3.59375 -7.914062 3.59375 -8.128906 L 9.128906 -8.128906 C 9.128906 -7.914062 9.128906 -7.625 9.128906 -7.246094 C 9.128906 -4.332031 9.117188 -6.636719 9.117188 -3.320312 C 9.117188 -1.347656 8.972656 -0.261719 8 -0.117188 L 8 0 L 12 0 L 12 -0.117188 C 11.027344 -0.261719 10.882812 -1.347656 10.882812 -3.320312 C 10.882812 -5.941406 10.882812 -8.550781 10.882812 -11.175781 C 10.882812 -13.144531 11.027344 -14.230469 12 -14.378906 L 12 -14.492188 L 8 -14.492188 L 8 -14.378906 C 8.972656 -14.230469 9.117188 -13.144531 9.117188 -11.175781 C 9.117188 -8.625 9.128906 -9.390625 9.128906 -8.566406 L 3.59375 -8.566406 C 3.59375 -9.390625 3.609375 -8.625 3.609375 -11.175781 C 3.609375 -13.144531 3.753906 -14.230469 4.726562 -14.378906 L 4.726562 -14.492188 L 0.726562 -14.492188 L 0.726562 -14.378906 C 1.695312 -14.230469 1.839844 -13.144531 1.839844 -11.175781 C 1.839844 -8.550781 1.839844 -5.941406 1.839844 -3.320312 C 1.839844 -1.347656 1.695312 -0.261719 0.726562 -0.117188 L 0.726562 0 Z M 4.726562 0 "/></g></g></g><g fill="#2e4056" fill-opacity="1"><g transform="translate(20.297739, 21.192049)"><g><path d="M 1.160156 -2.332031 C 1.160156 -0.78125 2.160156 0.289062 3.566406 0.289062 C 5.101562 0.289062 6.117188 -0.304688 7.074219 -1.332031 C 7.128906 -0.550781 7.566406 0 8.332031 0 L 9.796875 0 L 9.796875 -0.117188 C 8.828125 -0.261719 8.679688 -1.347656 8.679688 -3.320312 C 8.679688 -4.101562 8.679688 -5.203125 8.679688 -6.144531 C 8.679688 -8.390625 7.144531 -9.347656 4.871094 -9.347656 C 3.332031 -9.347656 1.636719 -8.738281 1.636719 -7.828125 C 1.636719 -7.433594 1.898438 -7.117188 2.363281 -7.117188 C 3.726562 -7.117188 3.015625 -8.984375 4.796875 -8.984375 C 6.101562 -8.984375 7.058594 -8.21875 7.058594 -6.738281 L 7.058594 -6.667969 C 4.796875 -6.636719 1.160156 -5.277344 1.160156 -2.332031 Z M 2.78125 -2.523438 C 2.78125 -4.492188 4.492188 -6.246094 7.058594 -6.304688 L 7.058594 -1.914062 C 6.378906 -1.074219 5.535156 -0.421875 4.332031 -0.421875 C 3.175781 -0.421875 2.78125 -1.667969 2.78125 -2.523438 Z M 2.78125 -2.523438 "/></g></g></g><g fill="#2e4056" fill-opacity="1"><g transform="translate(29.515369, 21.192049)"><g><path d="M 4.578125 0 L 4.578125 -0.117188 C 3.609375 -0.261719 3.464844 -1.347656 3.464844 -3.320312 C 3.464844 -3.667969 3.464844 -5.144531 3.449219 -6.523438 C 3.578125 -7.871094 4.941406 -8.449219 5.828125 -8.449219 C 6.871094 -8.449219 7.738281 -7.839844 8.277344 -6.625 L 8.390625 -6.625 L 8.390625 -8.609375 C 8.128906 -9.015625 7.378906 -9.347656 6.566406 -9.347656 C 5.074219 -9.347656 3.972656 -8.449219 3.449219 -7.523438 C 3.449219 -8.261719 3.449219 -8.855469 3.449219 -9.058594 L 0.738281 -9.058594 L 0.738281 -8.941406 C 1.710938 -8.796875 1.855469 -7.710938 1.855469 -5.738281 C 1.855469 -5.21875 1.839844 -3.957031 1.839844 -3.320312 C 1.839844 -1.347656 1.695312 -0.261719 0.726562 -0.117188 L 0.726562 0 Z M 4.578125 0 "/></g></g></g><g fill="#2e4056" fill-opacity="1"><g transform="translate(37.327167, 21.192049)"><g><path d="M 0.726562 -0.117188 L 0.726562 0 L 4.144531 0 L 4.144531 -0.117188 C 3.175781 -0.261719 3.464844 -1.347656 3.464844 -3.320312 L 3.449219 -7.59375 C 4.160156 -8.289062 5.1875 -8.679688 5.957031 -8.679688 C 7.507812 -8.679688 7.550781 -6.914062 7.550781 -5.738281 C 7.550781 -4.925781 7.566406 -4.128906 7.566406 -3.320312 C 7.566406 -1.347656 7.421875 -0.261719 6.449219 -0.117188 L 6.449219 0 L 10.304688 0 L 10.304688 -0.117188 C 9.332031 -0.261719 9.1875 -1.347656 9.1875 -3.320312 C 9.1875 -4.21875 9.175781 -5.042969 9.175781 -5.941406 C 9.175781 -6.59375 9.117188 -7.128906 9 -7.566406 C 9.710938 -8.277344 10.738281 -8.679688 11.523438 -8.679688 C 13.058594 -8.679688 13.117188 -6.914062 13.117188 -5.738281 C 13.117188 -4.925781 13.128906 -4.128906 13.128906 -3.320312 C 13.128906 -1.347656 12.984375 -0.261719 12.015625 -0.117188 L 12.015625 0 L 15.871094 0 L 15.871094 -0.117188 C 14.898438 -0.261719 14.753906 -1.347656 14.753906 -3.320312 C 14.753906 -4.21875 14.738281 -5.042969 14.738281 -5.941406 C 14.738281 -8.652344 13.507812 -9.347656 11.941406 -9.347656 C 10.738281 -9.347656 9.679688 -8.796875 8.871094 -7.957031 C 8.433594 -9.027344 7.566406 -9.347656 6.378906 -9.347656 C 5.246094 -9.347656 4.246094 -8.855469 3.449219 -8.117188 L 3.449219 -9.058594 L 0.738281 -9.058594 L 0.738281 -8.941406 C 1.710938 -8.796875 1.871094 -7.710938 1.855469 -5.738281 L 1.839844 -3.320312 C 1.824219 -1.347656 1.695312 -0.261719 0.726562 -0.117188 Z M 0.726562 -0.117188 "/></g></g></g><g fill="#2e4056" fill-opacity="1"><g transform="translate(52.617418, 21.192049)"><g><path d="M 1.160156 -4.535156 C 1.160156 -1.636719 2.941406 0.289062 5.21875 0.289062 C 7.492188 0.289062 9.261719 -1.636719 9.261719 -4.535156 C 9.261719 -7.421875 7.492188 -9.347656 5.21875 -9.347656 C 2.941406 -9.347656 1.160156 -7.421875 1.160156 -4.535156 Z M 4.507812 -8.871094 C 7.769531 -8.871094 9.175781 -0.1875 5.925781 -0.1875 C 2.652344 -0.1875 1.246094 -8.871094 4.507812 -8.871094 Z M 4.507812 -8.871094 "/></g></g></g><g fill="#2e4056" fill-opacity="1"><g transform="translate(61.733595, 21.192049)"><g><path d="M 0.726562 -0.117188 L 0.726562 0 L 4.144531 0 L 4.144531 -0.117188 C 3.175781 -0.261719 3.464844 -1.347656 3.464844 -3.320312 L 3.449219 -7.59375 C 4.160156 -8.289062 5.1875 -8.679688 5.957031 -8.679688 C 7.507812 -8.679688 7.550781 -6.914062 7.550781 -5.738281 C 7.550781 -4.925781 7.566406 -4.128906 7.566406 -3.320312 C 7.566406 -1.347656 7.421875 -0.261719 6.449219 -0.117188 L 6.449219 0 L 10.304688 0 L 10.304688 -0.117188 C 9.332031 -0.261719 9.1875 -1.347656 9.1875 -3.320312 C 9.1875 -4.21875 9.175781 -5.042969 9.175781 -5.941406 C 9.175781 -8.652344 7.941406 -9.347656 6.378906 -9.347656 C 5.246094 -9.347656 4.246094 -8.855469 3.449219 -8.117188 L 3.449219 -9.058594 L 0.738281 -9.058594 L 0.738281 -8.941406 C 1.710938 -8.796875 1.871094 -7.710938 1.855469 -5.738281 L 1.839844 -3.320312 C 1.824219 -1.347656 1.695312 -0.261719 0.726562 -0.117188 Z M 0.726562 -0.117188 "/></g></g></g><g fill="#2e4056" fill-opacity="1"><g transform="translate(71.458484, 21.192049)"><g><path d="M 4.578125 0 L 4.578125 -0.117188 C 3.609375 -0.261719 3.464844 -1.347656 3.464844 -3.320312 L 3.464844 -9.347656 L 3.347656 -9.347656 C 3.074219 -9 2.261719 -8.304688 0.824219 -8.304688 L 0.824219 -8.1875 C 1.796875 -8.042969 1.839844 -7.277344 1.839844 -5.738281 L 1.839844 -3.320312 C 1.839844 -1.347656 1.695312 -0.261719 0.726562 -0.117188 L 0.726562 0 Z M 2.679688 -12.59375 C 2.058594 -12.59375 1.550781 -12.085938 1.550781 -11.480469 C 1.550781 -10.855469 2.058594 -10.347656 2.679688 -10.347656 C 3.289062 -10.347656 3.796875 -10.855469 3.796875 -11.480469 C 3.796875 -12.085938 3.289062 -12.59375 2.679688 -12.59375 Z M 2.679688 -12.59375 "/></g></g></g><g fill="#2e4056" fill-opacity="1"><g transform="translate(75.458592, 21.192049)"><g><path d="M 0.289062 -0.117188 L 0.289062 0 L 2.839844 0 L 2.839844 -0.117188 C 1.535156 -0.304688 2.464844 -1.566406 4.230469 -4.042969 C 6.015625 -1.566406 6.941406 -0.304688 5.636719 -0.117188 L 5.636719 0 L 9.117188 0 L 9.117188 -0.117188 C 8.1875 -0.375 7.941406 -1.117188 5.523438 -4.523438 C 5.476562 -4.578125 5.449219 -4.636719 5.40625 -4.679688 C 7.679688 -8 8.160156 -8.667969 9.117188 -8.941406 L 9.117188 -9.058594 L 6.566406 -9.058594 L 6.566406 -8.941406 C 7.871094 -8.753906 6.941406 -7.492188 5.160156 -5.015625 C 3.390625 -7.492188 2.464844 -8.753906 3.769531 -8.941406 L 3.769531 -9.058594 L 0.289062 -9.058594 L 0.289062 -8.941406 C 1.21875 -8.679688 1.464844 -7.941406 3.882812 -4.535156 C 3.925781 -4.476562 3.957031 -4.421875 4 -4.375 C 1.726562 -1.058594 1.246094 -0.390625 0.289062 -0.117188 Z M 0.289062 -0.117188 "/></g></g></g></svg>
      </a>
         
      <nav class="navbar">
         <!-- <a href="home.php">home</a> -->
         <a href="shop.php">shop</a>
         <a href="orders.php">orders</a>
         <a href="about.php">about</a>
         <a href="contact.php">contact</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <a href="search_page.php" class="fas fa-search"></a>
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
         ?>
         <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $count_wishlist_items->rowCount(); ?>)</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $count_cart_items->rowCount(); ?>)</span></a>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
         <p><?= $fetch_profile['name']; ?></p>
         <a href="user_profile_update.php" class="btn">update profile</a>
         <a href="logout.php" class="delete-btn">logout</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>

   </div>

</header>