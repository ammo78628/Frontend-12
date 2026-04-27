##What is the ‘class’ attribute in HTML?

The class attribute is used to specify one or more class names for an HTML element. Its primary purpose is to point to a class in a style sheet (CSS) so that you can apply specific formatting to multiple elements at once. Unlike some other attributes, the same class name can be used on many different elements across the same page. This makes it the most efficient way to maintain a consistent design.

Example:

```
HTML: <p class="error-text">Invalid password.</p> and <span class="error-text">Check your email.</span>

CSS: .error-text { color: red; font-weight: bold; } (Both elements will now be red and bold).
```