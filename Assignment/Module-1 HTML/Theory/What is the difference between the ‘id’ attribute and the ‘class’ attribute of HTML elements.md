##What is the difference between the ‘id’ attribute and the ‘class’ attribute of HTML elements?

While both are used to identify elements for CSS or JavaScript, they have different rules regarding "uniqueness" and "frequency."

Uniqueness: An id must be unique within an entire HTML document. You cannot have two elements with the same ID. A class, however, can be reused as many times as you want.

Multiple Values: An element can have multiple classes (e.g., class="btn primary shadow"), but an element can only have one ID.

Purpose: id is often used for specific layout sections (like #header or #footer) or as "anchors" for linking to a specific spot on a page. class is used for repeated styles (like buttons or cards).

Example:
```
Correct ID use: <div id="main-navigation">...</div>

Correct Class use: <button class="blue-btn">Save</button> and <button class="blue-btn">Cancel</button>
```