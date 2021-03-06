const svgWrap = document.createElement('div'),
      svgData = `
<!-- SVG MENU PULL -->
<svg style="display: none;">
  <symbol id="svg-menu-pull" viewBox="0 0 22 14" preserveAspectRatio="xMinYMin meet">
    <path d="M1,2h20c0.553,0,1-0.448,1-1s-0.447-1-1-1H1C0.447,0,0,0.448,0,1S0.447,2,1,2z M21,6H1C0.447,6,0,6.448,0,7c0,0.553,0.447,1,1,1h20c0.553,0,1-0.447,1-1C22,6.448,21.553,6,21,6z M21,12H1
    c-0.553,0-1,0.447-1,1s0.447,1,1,1h20c0.553,0,1-0.447,1-1S21.553,12,21,12z"/>
  </symbol>
</svg>
<!-- /SVG MENU PULL -->

<!-- SVG PLAY -->
<svg style="display: none;">
  <symbol id="svg-play" viewBox="0 0 24 28" preserveAspectRatio="xMinYMin meet">
  <path d="M22.363,11.728L3.607,0.529C1.501-0.717,0,0.288,0,2.76V25.23c0,2.469,1.502,3.475,3.607,2.227L22.469,16.26
  C24.582,15.014,24.475,12.974,22.363,11.728z"/>
  </symbol>
</svg>
<!-- /SVG PLAY -->

<!-- SVG BULLET BIG -->
<svg style="display: none;">
  <symbol id="svg-bullet-big" viewBox="0 0 22 28" preserveAspectRatio="xMinYMin meet">
    <path d="M11,0C9.528,0,8,4,8,4v18h6V4C14,4,12.527,0,11,0z M8,28h6v-4H8
      V28z M19,0c-1.472,0-3,4-3,4v18h6V4C22,4,20.527,0,19,0z M16,28h6v-4h-6V28z M3,0C1.528,0,0,4,0,4v18h6V4C6,4,4.527,0,3,0z M0,28
      h6v-4H0V28z"/>
  </symbol>
</svg>
<!-- /SVG BULLET BIG -->

<!-- SVG TOWER BIG -->
<svg style="display: none;">
  <symbol id="svg-tower-big" viewBox="0 0 22 28" preserveAspectRatio="xMinYMin meet">
    <path d="M20,28H2c-1.104,0-2-0.896-2-2v-2c0-1.105,0.896-2,2-2h0.718H3
    c3,0,2-10,2-10h12c0,0-1,10,2,10h0.281H20c1.104,0,2,0.895,2,2v2C22,27.104,21.104,28,20,28z M15,10H7c-2.209,0-4-1.792-4-4l0,0l0,0
    V2V1c0-0.553,0.448-1,1-1s1,0.447,1,1v1h1.999C7,2,7,1.999,7,1.999C7,0.895,7.896,0,9,0h4c1.104,0,2,0.895,2,1.999V2h2V1
    c0-0.553,0.447-1,1-1s1,0.447,1,1v1v4l0,0l0,0C19,8.208,17.209,10,15,10z"/>
  </symbol>
</svg>
<!-- /SVG TOWER BIG -->

<!-- SVG SHIELD BIG -->
<svg style="display: none;">
  <symbol id="svg-shield-big" viewBox="0 0 24 28" preserveAspectRatio="xMinYMin meet">
    <path d="M24,14.869v0.316h-0.018c-0.025,0.291-0.085,0.658-0.228,0.949
    c-0.275,0.563-3.092,4.449-4.653,6.17C17.541,24.025,13.316,28,12,28s-5.541-3.975-7.103-5.695c-1.561-1.721-4.377-5.606-4.652-6.17
    c-0.143-0.291-0.202-0.658-0.228-0.949H0v-0.316c-0.002-0.097,0-0.158,0-0.158V9.728V4.271c0-1.444,0.35-3.859,12-4.27
    c11.649,0.411,12,2.825,12,4.27v5.458v4.983C24,14.711,24.002,14.772,24,14.869z"/>
  </symbol>
</svg>
<!-- /SVG SHIELD BIG -->

<!-- SVG PLUS BIG -->
<svg style="display: none;">
  <symbol id="svg-plus-big" viewBox="0 0 28 28" preserveAspectRatio="xMinYMin meet">
    <path d="M26,19h-7v7c0,1.104-0.896,2-2,2h-6c-1.104,0-2-0.896-2-2v-7H2
    c-1.104,0-2-0.896-2-2v-6.001c0-1.104,0.896-2,2-2h7v-7C9,0.895,9.896,0,11,0h6c1.104,0,2,0.895,2,1.999v7h7c1.104,0,2,0.896,2,2V17
    C28,18.104,27.104,19,26,19z"/>
  </symbol>
</svg>
<!-- /SVG PLUS BIG -->

<!-- SVG PLUS CC -->
<svg style="display: none;">
  <symbol id="svg-plus-cc" viewBox="0 0 8 8" preserveAspectRatio="xMinYMin meet">
    <path d="M8,5H5v3H3V5H0V3h3V0h2v3h3V5z"/>
  </symbol>
</svg>
<!-- /SVG PLUS CC -->

<!-- SVG MINUS CC -->
<svg style="display: none;">
  <symbol id="svg-minus-cc" viewBox="0 0 8 8" preserveAspectRatio="xMinYMin meet">
    <path d="M8,3v2H0V3H8z"/>
  </symbol>
</svg>
<!-- /SVG MINUS CC -->

<!-- SVG ARROW -->
<svg style="display: none;">
  <symbol id="svg-arrow" viewBox="0 0 3 5" preserveAspectRatio="xMinYMin meet">
      <path d="M0,4.996h1v-1H0V4.996z M1,3.996h1v-1H1V3.996z M1,0.996v1h1l-0.001-1H1z M0-0.004v1h1v-1H0z M2,1.996v1h1v-1H2z"/>
  </symbol>
</svg>
<!-- /SVG ARROW -->

<!-- SVG ARROW MEDIUM -->
<svg style="display: none;">
  <symbol id="svg-arrow-medium" viewBox="0 0 6 10" preserveAspectRatio="xMinYMin meet">
    <path d="M0-0.001v2h2.001v-2H0z M2.001,1.999v2H4v-2H2.001z M4,3.999v2h2v-2H4z M2.001,7.999H4v-2H2.001V7.999z M0,9.999h2.001v-2H0V9.999z"/>
  </symbol>
</svg>
<!-- /SVG ARROW MEDIUM -->

<!-- SVG ARROW BIG -->
<svg style="display: none;">
  <symbol id="svg-arrow-big" viewBox="0 0 9 15" preserveAspectRatio="xMinYMin meet">
    <path d="M0-0.002v3h3v-3H0z M3,2.998v3h3v-3H3z M6,5.998v3h3v-3H6zM3,11.998h3V8.997H3V11.998z M0,14.998h3v-3H0V14.998z"/>
  </symbol>
</svg>
<!-- /SVG ARROW BIG -->

<!-- SVG CROSS SMALL -->
<svg style="display: none;">
  <symbol id="svg-cross-small" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">
    <path d="M4.01,6.007h1.979V3.991H4.01V6.007z M2.01,4.007h1.979V1.992H2.01V4.007z M0.01,2.007h1.979v-2.015H0.01V2.007z M2.01,8.008h1.979V5.992H2.01V8.008z M0.01,10.008h1.979V7.992H0.01V10.008z
    M6.01,4.007h1.98V1.992H6.01V4.007z M8.01-0.008v2.015h1.98v-2.015H8.01z M6.01,8.008h1.98V5.992H6.01V8.008z M8.01,10.008h1.98V7.992H8.01V10.008z"/>
  </symbol>
</svg>
<!-- /SVG CROSS SMALL -->

<!-- SVG CROSS BIG -->
<svg style="display: none;">
  <symbol id="svg-cross-big" viewBox="0 0 15 15" preserveAspectRatio="xMinYMin meet">
    <path d="M0-0.002v3h3v-3H0z M3,2.998v2.999h3V2.998H3z M3,11.998h3V8.997H3V11.998z M0,14.997h3v-2.999H0V14.997z M15-0.002h-3v3h3V-0.002z M12,2.998H9v2.999h3V2.998z M6,5.997v3h3v-3H6z M12,11.998
      V8.997H9v3.001H12z M15,14.997v-2.999h-3v2.999H15z"/>
  </symbol>
</svg>
<!-- /SVG CROSS BIG -->

<!-- SVG CROSS CB SMALL -->
<svg style="display: none;">
  <symbol id="svg-cross-cb-small" viewBox="0 0 16 16" preserveAspectRatio="xMinYMin meet">
    <path d="M15.997,13.093L13.089,16l-5.093-5.092l-5.085,5.085l-2.908-2.908L5.088,8L0.003,2.915l2.908-2.908l5.085,5.085l5.093-5.093l2.908,2.908L10.904,8L15.997,13.093z"/>
  </symbol>
</svg>
<!-- /SVG CROSS CB SMALL -->

<!-- SVG STAR -->
<svg style="display: none;">
  <symbol id="svg-star" viewBox="0 0 13 12" preserveAspectRatio="xMinYMin meet">
    <path d="M6.5,0l2.145,3.771l4.362,0.813L9.971,7.727l0.551,4.272L6.5,10.171l-4.021,1.828l0.551-4.272l-3.037-3.144l4.362-0.813L6.5,0"/>
  </symbol>
</svg>
<!-- /SVG STAR -->

<!-- SVG SEARCH -->
<svg style="display: none;">
  <symbol id="svg-search" viewBox="0 0 24 24" preserveAspectRatio="xMinYMin meet">
    <path d="M23.685,22.199l-5.906-5.914c3.192-3.932,2.955-9.721-0.71-13.375C13.158-0.989,6.827-0.981,2.927,2.93c-3.9,3.91-3.892,10.242,0.019,14.143c3.655,3.646,9.427,3.873,13.351,0.693l5.913,5.919c0.409,0.409,1.07,0.408,1.478-0.002C24.095,23.273,24.094,22.608,23.685,22.199z M15.663,15.643c-3.114,3.129-8.169,3.135-11.292,0.016c-3.122-3.12-3.129-8.186-0.015-11.313c3.114-3.129,8.17-3.136,11.292-0.016S18.777,12.515,15.663,15.643z"/>
  </symbol>
</svg>
<!-- /SVG SEARCH -->

<!-- SVG INVENTORY -->
<svg style="display: none;">
  <symbol id="svg-inventory" viewBox="0 0 24 24" preserveAspectRatio="xMinYMin meet">
    <g>
      <path d="M22,0H2C0.896,0,0,0.896,0,2v20c0,1.104,0.896,2,2,2h20c1.104,0,2-0.896,2-2V2C24,0.896,23.104,0,22,0z M22,22.002H2v-20h20V22.002z M9.784,12.649l-0.883,3.333l0.03-0.021L8.901,16
        L12,14.168l3.072,1.781l0.025,0.033l-0.006-0.021l0.006,0.002l-0.016-0.041l-0.886-3.273l2.616-2.057l0.168-0.129L17,10.445l-3.63-0.238l0.002-0.003L12,7.001v0.018l-1.373,3.186L7.02,10.426l0.024,0.014L7,10.426L9.784,12.649z"/>
    </g>
    <g class="inventory-icon-points">
      <path d="M4,6.001h2v-2H4V6.001z M18,4.002v2h2v-2H18z M4,20.002h2v-2H4V20.002z M18,20.002h2v-2h-2V20.002z"/>
    </g>
  </symbol>
</svg>
<!-- /SVG INVENTORY -->

<!-- SVG INVENTORY LIGHT -->
<svg style="display: none;">
  <symbol id="svg-inventory-light" viewBox="0 0 24 24" preserveAspectRatio="xMinYMin meet">
    <g>
      <path d="M22,0H2C0.896,0,0,0.896,0,2v20c0,1.104,0.896,2,2,2h20c1.104,0,2-0.896,2-2V2C24,0.896,23.104,0,22,0z M22,22.002H2v-20h20V22.002z M9.784,12.649l-0.883,3.333l0.03-0.021L8.901,16
        L12,14.168l3.072,1.781l0.025,0.033l-0.006-0.021l0.006,0.002l-0.016-0.041l-0.886-3.273l2.616-2.057l0.168-0.129L17,10.445l-3.63-0.238l0.002-0.003L12,7.001v0.018l-1.373,3.186L7.02,10.426l0.024,0.014L7,10.426L9.784,12.649z"/>
    </g>
    <g class="inventory-icon-points-light">
      <path d="M4,6.001h2v-2H4V6.001z M18,4.002v2h2v-2H18z M4,20.002h2v-2H4V20.002z M18,20.002h2v-2h-2V20.002z"/>
    </g>
  </symbol>
</svg>
<!-- /SVG INVENTORY LIGHT -->

<!-- SVG INVENTORY CLOSE -->
<svg style="display: none;">
  <symbol id="svg-inventory-close" viewBox="0 0 24 24" preserveAspectRatio="xMinYMin meet">
    <g>
      <path d="M22,0H2C0.896,0,0,0.896,0,2v20c0,1.104,0.896,2,2,2h20c1.104,0,2-0.896,2-2V2C24,0.896,23.104,0,22,0z M22,22.002H2v-20h20V22.002z"/>
    </g>
    <g class="inventory-icon-points">
      <path d="M4,6.001h2v-2H4V6.001z M18,4.002v2h2v-2H18z M4,20.002h2v-2H4V20.002z M18,20.002h2v-2h-2V20.002z"/>
    </g>
    <g>
      <polygon points="16.005,9.602 14.402,8 12,10.402 9.597,8 7.995,9.602 
        10.397,12.004 7.995,14.406 9.597,16.01 12,13.606 14.402,16.01 16.005,14.406 13.603,12.004"/>
    </g>
  </symbol>
</svg>
<!-- /SVG INVENTORY CLOSE -->

<!-- SVG HEXAGON -->
<svg style="display: none;">
  <symbol id="svg-hexagon" viewBox="0 0 80 86" preserveAspectRatio="xMinYMin meet">
    <path d="M79.998,60.727c0,2.438-1.773,5.441-4.011,6.68l-31.9,17.666c-2.235,1.234-5.877,1.234-8.109,0L4.055,67.406
    c-2.232-1.238-4.054-4.242-4.054-6.68V25.273c0-2.437,1.828-5.444,4.061-6.68L35.99,0.93c2.232-1.237,5.888-1.237,8.122,0
    l31.876,17.663c2.237,1.236,4.011,4.243,4.011,6.68V60.727z"/>
  </symbol>
</svg>
<!-- /SVG HEXAGON -->

<!-- SVG FACEBOOK -->
<svg style="display: none;">
  <symbol id="svg-facebook" viewBox="0 0 12 12" preserveAspectRatio="xMinYMin meet">
    <path d="M10.875,11.996H7.872V7.868h2.059V5.776H7.872V4.753V4.551V4.539l0.001-0.001C7.879,4.32,8.058,4.146,8.277,4.146h0.045h0.742h1.08V2.054H8.322l0,0L8.316,2.065H8.255
    c-1.366,0-2.475,1.107-2.475,2.474v0.607v0.63H4.127v2.092H5.78v4.128H1.125C0.504,11.996,0,11.492,0,10.871V1.12
    c0-0.621,0.504-1.124,1.125-1.124h9.75C11.496-0.004,12,0.499,12,1.12v9.751C12,11.492,11.496,11.996,10.875,11.996z"/>
  </symbol>
</svg>
<!-- /SVG FACEBOOK -->

<!-- SVG TWITTER -->
<svg style="display: none;">
  <symbol id="svg-twitter" viewBox="0 0 12 10" preserveAspectRatio="xMinYMin meet">
    <path d="M12,1.149c-0.449,0.231-0.9,0.308-1.426,0.385c0.525-0.308,0.9-0.77,1.051-1.385c-0.45,0.308-0.975,0.461-1.575,0.615c-0.45-0.461-1.125-0.77-1.8-0.77c-1.275,0-2.4,1.154-2.4,2.538c0,0.231,0,0.386,0.075,0.539C3.9,2.995,2.025,1.995,0.825,0.457c-0.226,0.385-0.3,0.77-0.3,1.308c0,0.847,0.449,1.616,1.125,2.077c-0.375,0-0.75-0.154-1.125-0.308l0,0c0,1.23,0.824,2.23,1.949,2.461C2.25,6.073,2.025,6.073,1.8,6.073c-0.149,0-0.3,0-0.45-0.078c0.301,1,1.2,1.77,2.325,1.77C2.85,8.457,1.8,8.842,0.6,8.842c-0.225,0-0.375,0-0.6,0c1.125,0.693,2.4,1.154,3.75,1.154
    c4.5,0,6.975-3.847,6.975-7.154c0-0.077,0-0.23,0-0.309C11.25,2.149,11.699,1.688,12,1.149z"/>
  </symbol>
</svg>
<!-- /SVG TWITTER -->

<!-- SVG INSTAGRAM -->
<svg style="display: none;">
  <symbol id="svg-instagram" viewBox="0 0 12 12" preserveAspectRatio="xMinYMin meet">
    <path d="M8.688,0H3.312C1.485,0,0,1.485,0,3.311v5.377C0,10.514,1.485,12,3.312,12h5.377C10.515,12,12,10.514,12,8.688V3.311C12,1.485,10.515,0,8.688,0z M10.643,8.529c0,1.165-0.948,2.113-2.113,2.113H3.471c-1.166,0-2.113-0.948-2.113-2.113V3.471c0-1.166,0.947-2.113,2.113-2.113h5.059c1.165,0,2.113,0.947,2.113,2.113V8.529z M6,2.993c-1.657,0-3.006,1.349-3.006,3.006S4.343,9.005,6,9.005s3.005-1.349,3.005-3.006S7.657,2.993,6,2.993z M6,7.771c-0.977,0-1.771-0.795-1.771-1.772c0-0.977,0.795-1.771,1.771-1.771s1.771,0.794,1.771,1.771C7.771,6.977,6.977,7.771,6,7.771z
    M9.094,2.021c-0.243,0-0.624,0.102-0.813,0.287C8.092,2.493,7.982,2.752,7.982,3.016c0,0.262,0.109,0.521,0.299,0.706C8.47,3.907,8.732,4.015,8.999,4.015c0.269,0,0.53-0.107,0.72-0.293s0.297-0.444,0.297-0.706c0-0.264-0.107-0.522-0.297-0.708C9.53,2.122,9.337,2.021,9.094,2.021z"/>
  </symbol>
</svg>
<!-- /SVG INSTAGRAM -->

<!-- SVG TWITCH -->
<svg style="display: none;">
  <symbol id="svg-twitch" viewBox="0 0 12 13" preserveAspectRatio="xMinYMin meet">
    <path d="M5.987,3.013H4.986v3.981h1.001V3.013z M0.741-0.006L0,2.33v9.078h2.966v1.586H4.86l1.482-1.586h2.279L12,7.863v-7.869H0.741z M10.847,7.489L8.979,9.421H5.986l-1.511,1.585V9.421H1.867
    V1.177h8.979V7.489z M9.01,3.013H8.009v3.981H9.01V3.013z"/>
  </symbol>
</svg>
<!-- /SVG TWITCH -->

<!-- SVG GPLUS -->
<svg style="display: none;">
  <symbol id="svg-gplus" viewBox="0 0 15 9" preserveAspectRatio="xMinYMin meet">
    <path d="M4.591,5.432h2.5c-0.386,0.984-1.358,1.687-2.5,1.687c-1.479,0-2.678-1.175-2.678-2.624c0-1.45,1.198-2.627,2.678-2.627c0.691,0,1.319,0.26,1.794,0.681l1.268-1.243l0.085-0.082
    C6.916,0.462,5.811-0.007,4.591-0.007C2.055-0.007,0,2.009,0,4.494c0,2.483,2.055,4.5,4.591,4.5c2.082,0,3.838-1.358,4.4-3.22V3.556h-4.4V5.432z M13,2V0h-1v2h-2v1h2v2h1V3h2V2H13z"/>
  </symbol>
</svg>
<!-- /SVG GPLUS -->

<!-- SVG YOUTUBE -->
<svg style="display: none;">
  <symbol id="svg-youtube" viewBox="0 0 14 12" preserveAspectRatio="xMinYMin meet">
    <path d="M10.889,0H3.111C1.393,0,0,1.535,0,3.428v5.144C0,10.465,1.393,12,3.111,12h7.777C12.607,12,14,10.465,14,8.571V3.428C14,1.535,12.607,0,10.889,0z M12,8.004c0,1.104-0.896,2-2,2H4c-1.104,0-2-0.896-2-2v-4c0-1.104,0.896-2,2-2h6c1.104,0,2,0.896,2,2V8.004z M5,7.99l5-1.991L5,4.008V7.99z"/>
  </symbol>
</svg>
<!-- /SVG YOUTUBE -->

<!-- SVG CHECK -->
<svg style="display: none;">
  <symbol id="svg-check" viewBox="0 0 16 13" preserveAspectRatio="xMinYMin meet">
    <path d="M16,2.167L5.091,13L0,7.945l2.182-2.167l2.909,2.888L13.819,0L16,2.167z"/>
  </symbol>
</svg>
<!-- /SVG CHECK -->

<!-- SVG EXCLAMATION -->
<svg style="display: none;">
  <symbol id="svg-exclamation" viewBox="0 0 6 20" preserveAspectRatio="xMinYMin meet">
    <path d="M0,0l1,14h4L6,0H0z M1,20h4v-4H1V20z"/>
  </symbol>
</svg>
<!-- /SVG EXCLAMATION -->

<!-- SVG PLUS CC 2 -->
<svg style="display: none;">
  <symbol id="svg-plus-cc-2" viewBox="0 0 12 12" preserveAspectRatio="xMinYMin meet">
    <polygon points="12,5 7,5 7,0 5,0 5,5 0,5 0,7 5,7 5,12 7,12 7,7 12,7"/>
  </symbol>
</svg>
<!-- /SVG PLUS CC 2 -->

<!-- SVG BARS -->
<svg style="display: none;">
  <symbol id="svg-bars" viewBox="0 0 11 10" preserveAspectRatio="xMinYMin meet">
    <path d="M0,10h3V2H0V10z M4,10h3V0H4V10z M8,4v6h3V4H8z"/>
  </symbol>
</svg>
<!-- /SVG BARS -->

<!-- SVG SKULL -->
<svg style="display: none;">
  <symbol id="svg-skull" viewBox="0 0 22 22" preserveAspectRatio="xMinYMin meet">
    <path d="M19.426,13.453v-1.221c1.291-1.018,0-2.443,0-2.443 c0-10.727-8.385-9.767-8.385-9.767V0.04c0,0-8.461-0.958-8.461,9.76c0,0-1.302,1.423,0,2.44v1.22c0,0-1.302,1.22,0.651,2.439c1.952,1.22,3.905,1.576,3.905,3.66c0,0,1.03,2.44,3.905,2.44c2.849,0,3.871-2.442,3.871-2.442c0-2.086,1.935-2.442,3.87-3.663S19.426,13.453,19.426,13.453z M6.547,13.453c-3.123,0-2.563-1.87-2.563-3.053s1.122-2.441,3.204-2.441s2.563,1.22,2.563,1.22S9.67,13.453,6.547,13.453z M11.041,17.115c-2.742-0.077-1.936-1.831-1.29-2.441c0.645-0.611,1.29-1.832,1.29-1.832s0.645,1.221,1.291,1.832C12.977,15.284,13.781,17.038,11.041,17.115z M15.533,13.453c-3.122,0-3.202-4.274-3.202-4.274s0.479-1.22,2.562-1.22s3.204,1.258,3.204,2.441S18.656,13.453,15.533,13.453z"/>
  </symbol>
</svg>
<!-- /SVG SKULL -->

<!-- SVG PLIERS -->
<svg style="display: none;">
  <symbol id="svg-pliers" viewBox="0 0 22 22" preserveAspectRatio="xMinYMin meet">
    <path d="M13.949,14.052c-0.308,1.376-1.928,3.848-3.897,5.087s-3.207,2.09-3.816,2.442c-0.611,0.353-1.585,0.983-2.425-0.657c0,0-0.272-0.07,0.642-0.642c0.914-0.57,4.107-3.073,5.011-3.976
		c0.903-0.902,1.899-2.792,2.672-4.546c0.771-1.753,0.535-2.03,2.526-3.89c0,0,0.051,0.034,0.135,0.092c0.154-0.001,0.357-0.242,0.357-0.242l-0.343-0.341l-0.428-0.428l-0.08,0.08c-0.229,0.229-0.069,0.411-0.069,0.411l-0.081-0.05C14.184,7.437,14.2,7.46,14.2,7.46c-1.867,1.994-2.146,1.754-3.91,2.525c-1.765,0.77-3.666,1.763-4.571,2.666
		c-0.905,0.905-3.417,4.102-3.99,5.017c-0.572,0.914-0.644,0.643-0.644,0.643c-1.653-0.847-1.021-1.824-0.667-2.435c0.354-0.611,1.206-1.849,2.448-3.821c1.243-1.972,3.727-3.591,5.111-3.896C9.362,7.854,9.95,6.793,10.15,5.99c0.202-0.804,0.512-0.854,0.897-0.551c0.386,0.304,0.838,0.153,1.254,0.127c0.415-0.027,0.595-0.25,0.753,0.109
		c0.021,0.047,0.056,0.112,0.103,0.191c0.253,0.111,0.601-0.342,0.601-0.342l1.365-1.362c0.008-0.131,0.069-0.412,0.069-0.412l1.365-1.363c0.772-0.648,4.002-2.211,4.234-2.346s0.418,0.096,0.418,0.096l0.085,0.086l-1.204,1.203c-0.192-0.192-0.413,0.069-0.413,0.069s-0.653,0.652-0.882,0.881c-0.23,0.23,0.016,0.498,0.016,0.498l-1.194,1.534l1.536-1.192
		c0.233,0.232,0.584,0.102,0.584,0.102s0.585-0.584,0.883-0.882c0.299-0.298-0.016-0.496-0.016-0.496l1.205-1.202l0.085,0.085c0.146,0.147,0.097,0.417,0.097,0.417s-0.529,1.212-1.167,2.362s-1.098,1.951-1.098,1.951s-1.297,1.293-1.365,1.362c-0.069,0.069-0.498-0.016-0.498-0.016s-1.549,1.545-1.687,1.683c-0.076,0.076-0.039,0.194,0.01,0.286
		c0.105,0.062,0.193,0.11,0.253,0.137c0.356,0.155,0.135,0.334,0.106,0.747c-0.027,0.413-0.18,0.863,0.123,1.246c0.303,0.381,0.251,0.689-0.552,0.891C15.315,12.09,14.257,12.676,13.949,14.052z"/>
  </symbol>
</svg>
<!-- /SVG PLIERS -->

<!-- SVG EXPLOSION -->
<svg style="display: none;">
  <symbol id="svg-explosion" viewBox="0 0 30 30" preserveAspectRatio="xMinYMin meet">
    <path d="M15.669,7.531l0.946,4.201l3.924-1.761l-0.946,3.388l2.435,0.542l-2.3,2.845l3.654,1.221l-5.008,1.627l1.083,3.389l-2.977-2.033l-2.03,2.168l-2.165-2.439l-3.924,0.949l1.218-4.066l-3.924-1.355l3.924-2.439l-3.112-2.846l4.194,0.678l0.271-3.931l2.165,2.982L15.669,7.531 M9.322,2l-0.38,5.517l-0.116,1.68L6.773,8.865L0,7.771l5.15,4.709l1.053,0.963L4.632,14.42l-3.743,2.328l4.138,1.43l2.063,0.713l-0.635,2.117l-1.038,3.465l3.396-0.822l2.793-0.676l1.377,1.553l1.427,1.609l1.469-1.568
	l0.882-0.941l1.601,1.092L23.164,28l-1.813-5.674l-0.44-1.381l3.065-0.994L30,17.992l-6.009-2.004l-0.82-0.274l0.384-0.474l2.14-2.646l-3.248-0.724l-0.338-0.075l0.349-1.244l1.182-4.235l-3.89,1.747l-1.735,0.779l-0.401-1.785l-0.897-3.984l-2.561,3.104l-0.957,1.161l-0.671-0.926L9.322,2L9.322,2z"/>
  </symbol>
</svg>
<!-- /SVG EXPLOSION -->

<!-- SVG STOPWATCH -->
<svg style="display: none;">
  <symbol id="svg-stopwatch" viewBox="0 0 22 22" preserveAspectRatio="xMinYMin meet">
    <path d="M8,2h1v1.998h4V2h1c0.552,0,1-0.448,1-1c0-0.553-0.448-1-1-1H8C7.447,0,7,0.447,7,1C7,1.552,7.447,2,8,2z M11,8c-0.553,0-1,0.447-1,1v4c0,0.552,0.447,1,1,1c0.552,0,1-0.448,1-1V9
			C12,8.447,11.552,8,11,8z M18.098,7.479c0.393,0.308,0.954,0.297,1.316-0.065c0.391-0.391,0.391-1.023,0-1.415L18,4.585c-0.391-0.39-1.024-0.39-1.414,0c-0.362,0.362-0.373,0.926-0.064,1.318C14.996,4.714,13.084,3.999,11,3.999c-4.971,0-9,4.03-9,9.001s4.029,9,9,9s9-4.029,9-9C20,10.917,19.285,9.004,18.098,7.479z M11,20c-3.866,0-7-3.135-7-7
			c0-3.866,3.134-7.001,7-7.001S18,9.134,18,13C18,16.865,14.866,20,11,20z"/>
  </symbol>
</svg>
<!-- /SVG STOPWATCH -->

<!-- SVG FEATURED CORNER -->
<svg style="display: none;">
  <symbol id="svg-featured-corner" viewBox="0 0 24 24" preserveAspectRatio="xMinYMin meet">
    <path d="M0,0l24,24V0H0z M19.472,11L17,9.781L14.528,11l0.339-2.849L13,6.056l2.682-0.542L17,3l1.318,2.515L21,6.056l-1.867,2.095L19.472,11z"/>
  </symbol>
</svg>
<!-- /SVG FEATURED CORNER -->

<!-- SVG ROLE TOP -->
<svg style="display: none;">
  <symbol id="svg-role-top" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
    <path d="M16,19H3l3-3h10V6l3-3v13v3H16z M7,13V7h6v6H7z M4,4v10l-3,3V4V1h3h13l-3,3H4z"/>
  </symbol>
</svg>
<!-- /SVG ROLE TOP -->

<!-- SVG ROLE JUNGLER -->
<svg style="display: none;">
  <symbol id="svg-role-jungler" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
    <path d="M12.762,17.091l2.852-2.728C15.578,8.036,19,5.637,19,5.637C12.549,9.745,12.762,17.091,12.762,17.091z M15.436,0c0,0-4.277,6.327-4.812,8c0,0,1.354,3.454,1.425,4c0,0,0.464-1.891,0.713-2C12.762,10,12.477,5.236,15.436,0z M6.881,12C5.42,7.563,1,5.818,1,5.818c3.244,3.236,3.208,8.545,3.208,8.545C6.596,15.928,9.911,20,9.911,20c0.891-1.127,0.891-5.272,0.891-5.272C10.375,8.909,4.208,0,4.208,0C8.592,8.473,6.881,12,6.881,12z"/>
  </symbol>
</svg>
<!-- /SVG ROLE JUNGLER -->

<!-- SVG ROLE MIDDLE -->
<svg style="display: none;">
  <symbol id="svg-role-middle" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
    <path d="M16,19H8l3-3h5v-5l3-3v8v3H16z M1,19v-4L15,1h4v4L5,19H1z M4,4v5l-3,3V4V1h3h8L9,4H4z"/>
  </symbol>
</svg>
<!-- /SVG ROLE MIDDLE -->

<!-- SVG ROLE ADCARRY -->
<svg style="display: none;">
  <symbol id="svg-role-adcarry" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
    <path d="M7.083,5.282l0.486-1.409l-2.777-1.69l0.764,3.099H7.083zM11.598,4.366L10,0L8.402,4.366L10,6.549L11.598,4.366z M14.444,5.282l0.764-3.099l-2.777,1.69l0.486,1.409H14.444z
			 M15.486,5.563c0,0,0.556,1.209-0.764,1.338c-1.32,0.129-2.778-0.774-2.778-0.774L10,8.451L8.056,6.127c0,0-1.458,0.903-2.778,0.774C3.958,6.772,4.514,5.563,4.514,5.563S1.569,7.634,0,12.958c0,0,2.417-2.169,5.069-2.817c0,0,0.583,1.916,2.917,2.817l-0.069-1.69c0,0-0.973-0.353-0.973-1.408c0,0,1.26-0.131,1.875-0.07c0,0-0.208,2.512,0.694,6.056
			l-1.458,1.973V20L10,19.014L11.944,20v-2.183l-1.458-1.973c0.902-3.544,0.694-6.056,0.694-6.056c0.615-0.061,1.875,0.07,1.875,0.07c0,1.056-0.973,1.408-0.973,1.408l-0.069,1.69c2.334-0.901,2.917-2.817,2.917-2.817C17.583,10.789,20,12.958,20,12.958C18.431,7.634,15.486,5.563,15.486,5.563z"/>
  </symbol>
</svg>
<!-- /SVG ROLE ADCARRY -->

<!-- SVG ROLE SUPPORT -->
<svg style="display: none;">
  <symbol id="svg-role-support" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
    <path d="M6.471,5.429H0c1.937,2.095,4.117,2.285,4.117,2.285h1.765L4.117,10l2.941,1.143l1.177-4L6.471,5.429z M12.941,3.143L12.353,2H7.647L7.059,3.143L10,6.571L12.941,3.143z M10,8.286
			L9.412,7.714l-1.765,8.572L10,18l2.353-1.714l-1.765-8.572L10,8.286z M20,5.429h-6.471l-1.765,1.714l1.177,4L15.882,10l-1.765-2.286h1.765C15.882,7.714,18.063,7.523,20,5.429z"/>
  </symbol>
</svg>
<!-- /SVG ROLE SUPPORT -->

<!-- SVG CALENDAR -->
<svg style="display: none;">
  <symbol id="svg-calendar" viewBox="0 0 24 24" preserveAspectRatio="xMinYMin meet">
    <path id="Outter_Edge" fill="#363636" d="M20,2H4C1.791,2,0,3.791,0,6v14c0,2.209,1.791,4,4,4h16c2.209,0,4-1.791,4-4V6 C24,3.791,22.209,2,20,2z M22,20c0,1.103-0.897,2-2,2H4c-1.103,0-2-0.897-2-2V6c0-1.103,0.897-2,2-2h16c1.103,0,2,0.897,2,2V20z"/>
    <path fill="#363636" d="M8,0C7.447,0,7,0.448,7,1v4c0,0.553,0.447,1,1,1c0.552,0,1-0.447,1-1V1C9,0.448,8.552,0,8,0z M16,0c-0.553,0-1,0.448-1,1v4c0,0.553,0.447,1,1,1c0.552,0,1-0.447,1-1V1C17,0.448,16.552,0,16,0z"/>
    <path fill="#7442CE" d="M5,11h2V9H5V11z M9,11h2V9H9V11z M13,11h2V9h-2V11z M17,9v2h2V9H17z M5,15h2v-2H5V15z M9,15h2v-2H9V15z M13,15h2v-2h-2V15z M17,15h2v-2h-2V15z M5,19h2v-2H5V19z M9,19h2v-2H9V19z M13,19h2v-2h-2V19z M17,19h2v-2h-2V19z"/>
  </symbol>
</svg>
<!-- /SVG CALENDAR -->

<!-- SVG BARON -->
<svg style="display: none;">
  <symbol id="svg-baron" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
    <path d="M9,12v2h2v-2H9z M11,1l3,5v3h-2l-2-3L8,9H6V6l3-5L2,6l5,13h2v-2h2v2h2l5-13L11,1z M13,14h-2v2H9v-2H7v-2h2v-2h2v2h2V14z"/>
  </symbol>
</svg>
<!-- /SVG BARON -->

<!-- SVG DRAGON -->
<svg style="display: none;">
  <symbol id="svg-dragon" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
    <path d="M16,6V4l-4,2l-2-6L8,6L4,4v2H0c0,0,4,3.554,4,7v2c0,0,4,0.88,4,4c0,0,0.497,1,2,1c1.502,0,2-1,2-1c0-3.12,4-4,4-4v-2c0-3.446,4-7,4-7H16z M8,14l-2-1l-1-3l3,1V14z M14,13l-2,1v-3l3-1L14,13z"/>
  </symbol>
</svg>
<!-- /SVG DRAGON -->

<!-- SVG INHIBITOR -->
<svg style="display: none;">
  <symbol id="svg-inhibitor" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
    <path d="M10,2c-4.418,0-8,3.582-8,8s3.582,8,8,8c4.418,0,8-3.582,8-8S14.418,2,10,2z M10,15c-2.761,0-5-2.238-5-5s2.239-5,5-5c2.762,0,5,2.238,5,5S12.762,15,10,15z M7.016,10L10,12.983L12.984,10L10,7.017L7.016,10z"/>
  </symbol>
</svg>
<!-- /SVG INHIBITOR -->

<!-- SVG RIFT HERALD -->
<svg style="display: none;">
  <symbol id="svg-rift-herald" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
    <path d="M15.654,12.946c-0.812,2.356-3.022,4.061-5.651,4.061c-2.63,0-4.84-1.703-5.652-4.06C2.474,12.661,1,11,1,11C1,4.047,6,1,6,1v5.548c1.063-0.96,2.458-1.561,4.003-1.561
		c1.542,0,2.934,0.599,3.997,1.556V1c0,0,5,3.047,5,10C19,11,17.529,12.658,15.654,12.946z M10.003,7.719c-1.507,0-2.729,1.223-2.729,2.731s1.222,3.825,2.729,3.825s2.728-2.316,2.728-3.825S11.51,7.719,10.003,7.719z M9,10h2v2H9V10zM5.992,19C2.476,18.584,1,16,1,16c0.808-1.388,1-3,1-3C2.333,15.867,5.992,19,5.992,19z M18,13c0,0,0.192,1.612,1,3
		c0,0-1.476,2.584-4.992,3C14.008,19,17.667,15.867,18,13z"/>
  </symbol>
</svg>
<!-- /SVG RIFT HERALD -->

<!-- SVG TOWER -->
<svg style="display: none;">
  <symbol id="svg-tower" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
    <path d="M14.56,10h-1.581v2h0.777h1.222v2h-1.442l-0.557,5H6.983l-0.555-5H4.984v-2h1.221h0.777v-2H5.441L2,6.988h3.983V5l3.998-4l3.997,4v1.988h4.023L14.56,10z M10.98,5H8.981v2h1.999V5z"/>
  </symbol>
</svg>
<!-- /SVG TOWER -->

<!-- SVG TRACK -->
<svg style="display: none;">
  <symbol id="svg-track" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">
    <path d="M5,10c-2.762,0-5-2.238-5-5s2.238-5,5-5s5,2.238,5,5S7.762,10,5,10z M5,1C2.791,1,1,2.791,1,5s1.791,4,4,4s4-1.791,4-4S7.209,1,5,1z"/>
  </symbol>
</svg>
<!-- /SVG TRACK -->

<!-- SVG CLOSE -->
<svg style="display: none;">
  <symbol id="svg-close" viewBox="0 0 24 24" preserveAspectRatio="xMinYMin meet">
    <path d="M12,24C5.383,24,0,18.616,0,12C0,5.383,5.383,0,12,0c6.617,0,12,5.383,12,12C24,18.616,18.617,24,12,24z M12,2C6.486,2,2,6.485,2,12c0,5.514,4.486,10,10,10c5.514,0,10-4.486,10-10
		C22,6.485,17.514,2,12,2z M16.707,16.707C16.512,16.902,16.256,17,16,17s-0.512-0.098-0.707-0.293L12,13.414l-3.293,3.293C8.512,16.902,8.256,17,8,17s-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414L10.586,12L7.293,8.707c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0L12,10.586l3.293-3.293c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L13.414,12l3.293,3.293C17.098,15.684,17.098,16.316,16.707,16.707z"/>
  </symbol>
</svg>
<!-- /SVG CLOSE -->

<!-- SVG GRID -->
<svg style="display: none;">
  <symbol id="svg-grid" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">
    <path d="M0,4h4V0H0V4z M0,10h4V6H0V10z M6,0v4h4V0H6z M6,10h4V6H6V10z"/>
  </symbol>
</svg>
<!-- /SVG GRID -->

<!-- SVG LIST -->
<svg style="display: none;">
  <symbol id="svg-list" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">
    <path d="M0,0v2h10V0H0z M0,6h10V4H0V6z M0,10h10V8H0V10z"/>
  </symbol>
</svg>
<!-- /SVG LIST -->


<!-- SVG LEAF -->
<svg style="display: none;">
  <symbol id="svg-leaf" viewBox="0 0 12 12" preserveAspectRatio="xMinYMin meet">
    <path d="M9.523,0.092c-0.335-0.195-1.293-0.075-2.445,0.3c-2.016,1.449-3.717,3.583-3.835,7.01c-0.021,0.082-0.221-0.012-0.26-0.037c-0.544-1.097-0.76-2.251-0.306-3.917C2.762,3.3,2.486,3.117,2.435,3.169c-0.1,0.105-0.516,0.571-0.791,1.074C0.275,6.74,1.17,9.939,3.565,11.34c2.395,1.401,5.419,0.497,6.753-2.021C11.861,6.412,10.429,0.624,9.523,0.092z"/>
  </symbol>
</svg>
<!-- /SVG LEAF -->

<!-- SVG DRIBBLE -->
<svg style="display: none;">
  <symbol id="svg-dribble" viewBox="0 0 12 12" preserveAspectRatio="xMinYMin meet">
    <path d="M6,12c-3.314,0-6-2.687-6-6s2.686-6,6-6c3.313,0,5.999,2.687,5.999,6S9.313,12,6,12z M7.434,4.993C7.584,5.296,7.728,5.6,7.859,5.896c0.814-0.134,1.696-0.138,2.634,0.047
    c-0.01-0.875-0.272-1.687-0.713-2.374C9.061,4.169,8.257,4.633,7.434,4.993z M9.103,9.246c0.599-0.573,1.036-1.311,1.248-2.138c-0.485-0.085-1.185-0.15-2.008-0.055C8.68,7.917,8.934,8.685,9.103,9.246z M5.993,10.497c0.708,0,1.375-0.168,1.972-0.459c-0.154-0.941-0.434-1.87-0.777-2.751C6.014,7.626,4.701,8.334,3.439,9.701C4.166,10.202,5.044,10.497,5.993,10.497z M2.556,8.898c0.8-0.836,2.245-2.096,4.158-2.722C6.592,5.914,6.465,5.66,6.336,5.411C4.394,6.052,2.504,6.19,1.5,6.214C1.55,7.235,1.937,8.167,2.556,8.898z M1.592,5.049c1.734-0.131,3.097-0.387,4.16-0.7C5.14,3.3,4.537,2.443,4.128,1.9C2.851,2.483,1.893,3.644,1.592,5.049z M5.993,1.492c-0.258,0-0.508,0.027-0.754,0.069c0.624,0.73,1.17,1.554,1.645,2.395
    C7.975,3.509,8.621,3.02,8.992,2.644C8.196,1.931,7.147,1.492,5.993,1.492z"/>
  </symbol>
</svg>
<!-- /SVG DRIBBLE -->
`;

svgWrap.innerHTML = svgData;
document.body.appendChild(svgWrap);