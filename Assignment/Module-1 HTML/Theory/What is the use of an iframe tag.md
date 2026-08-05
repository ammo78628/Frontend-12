##What is the use of an iframe tag?
The <iframe> (Inline Frame) tag is used to embed an external document or a completely separate HTML page within the current webpage. It acts as a window that displays content from another source without the user having to leave your site.

This is highly useful for integrating third-party content that you do not host yourself. The src attribute is required to tell the browser which URL to load inside the frame. You can also control the dimensions of this window using width and height attributes.

Example:
```
Embedding a Map: <iframe src="https://www.google.com/maps/embed?..." width="600" height="450"></iframe>

Embedding a Video: <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player"></iframe>

Embedding another Page: <iframe src="newsletter.html" title="Current Newsletter"></iframe>
```