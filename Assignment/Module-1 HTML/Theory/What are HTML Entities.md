##What are HTML Entities?

HTML Entities are specific character sequences used to display "reserved" characters that would otherwise confuse the browser. For instance, because < and > are used for tags, the browser might try to read them as code if you just type them normally. Entities are also used to display symbols not found on a standard keyboard (like copyright symbols) or to handle white space. They always begin with an ampersand & and end with a semicolon ;.

Example:

```
Displaying Code: To show the text <h1> on a webpage without making it a real heading, you write &lt;h1&gt;.

Copyright Symbol: To display ©, you write &copy;.

Mathematical Symbols: To display ¥, you write &yen;.

Non-breaking Space: To force a space that doesn't collapse, you use &nbsp;.
```