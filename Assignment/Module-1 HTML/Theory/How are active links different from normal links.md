##How are active links different from normal links? 

The difference lies in the "state" of the hyperlink based on user interaction. A normal link (often referred to as the "unvisited" state) is the default appearance of a link that a user has not clicked on yet. An active link represents the state of the link at the exact moment it is being clicked or activated by the user. In CSS, these are controlled using "pseudo-classes": :link for normal and :active for the moment of the click.

Example:

Normal Link: Usually blue and underlined by default.

Active Link: Usually turns red or changes color for a split second while your mouse button is held down on it.

CSS Control:
```
CSS
a:link { color: blue; }    /* Normal state */
a:active { color: red; }   /* Active state (during click) */
```