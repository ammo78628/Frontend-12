##What are different types of lists in HTML? 

HTML offers several ways to group related items. While there are three primary list types, they can be combined to create more complex structures known as Nested Lists.

Ordered List (<ol>): Used for items that follow a specific sequence (like steps in a recipe). Browsers automatically number these (1, 2, 3...).

Unordered List (<ul>): Used for items where the order doesn't matter. Browsers typically display these with bullet points.

Description List (<dl>): Used for a list of terms and their corresponding descriptions (like a glossary). It uses <dt> for the term and <dd> for the description.

Nested List: This is not a separate tag, but rather the practice of placing one list inside another list item (<li>). This is used to create sub-items or sub-categories. To do this correctly, the second list must be placed inside the <li> tag of the parent list before that tag is closed.

Example:
```
Ordered: <ol><li>Step One</li><li>Step Two</li></ol>

Unordered: <ul><li>Milk</li><li>Bread</li></ul>

Description: <dl><dt>CPU</dt><dd>Central Processing Unit</dd></dl>
```
Nested List Example:
```
HTML
<ul>
  <li>Coffee</li>
  <li>Tea
    <ul>
      <li>Black tea</li>
      <li>Green tea</li>
    </ul>
  </li>
  <li>Milk</li>
</ul>
```