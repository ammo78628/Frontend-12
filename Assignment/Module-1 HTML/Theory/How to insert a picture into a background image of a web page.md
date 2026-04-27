##How to insert a picture into a background image of a web page? 

To insert a picture as a background, you use the CSS background-image property rather than an HTML tag like <img>. This property is typically applied to the <body> element to cover the entire page, or to a specific <div> to cover a section. Because a background image can repeat or be the wrong size by default, you usually pair it with other properties like background-size, background-repeat, and background-position to ensure it looks professional.

Example:

HTML: 
```<body class="main-bg"> ... </body>```

CSS:
```
CSS
.main-bg {
  background-image: url('landscape.jpg');
  background-size: cover; /* Scales the image to fill the entire screen */
  background-repeat: no-repeat; /* Prevents the image from tiling */
  background-position: center; /* Keeps the image centered */
  background-attachment: fixed; /* Optional: keeps background still while scrolling */
}
```