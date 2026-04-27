##How to create a Hyperlink in HTML?

 A hyperlink is created using the <a> (Anchor) tag. To make the link functional, you must use the href (Hypertext Reference) attribute, which specifies the destination of the link. This destination can be an absolute URL (a full website address), a relative URL (a path to a file on the same server), an email address, or even a specific ID on the same page.

The text or image placed between the opening <a> and closing </a> tags becomes the "clickable" area for the user. Additionally, you can use the target attribute to decide if the link should open in the same tab (_self) or a new tab (_blank).

Example:
```
External Link: <a href="https://www.google.com" target="_blank">Click here to visit Google</a>

Internal File Link: <a href="contact.html">Contact Us</a>

Email Link: <a href="mailto:support@example.com">Email Support</a>
```