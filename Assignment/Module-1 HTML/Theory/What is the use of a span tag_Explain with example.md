##What is the use of a span tag? Explain with example? 

The <span> tag is a generic inline container. Unlike a <div>, which is a block-level container, the <span> does not start a new line and carries no inherent meaning or visual style.

Its primary purpose is to group a specific portion of text or a small part of a document so that it can be targeted for styling with CSS or manipulation with JavaScript. It is most commonly used to change the color, font, or weight of a specific word or phrase inside a paragraph without affecting the rest of the sentence.

Example:

HTML:
```
HTML
<p>Please note that the <span class="urgent">deadline is tomorrow</span> at noon.</p>
```
CSS:
```
CSS
.urgent {
  color: red;
  font-weight: bold;
  text-decoration: underline;
}
```