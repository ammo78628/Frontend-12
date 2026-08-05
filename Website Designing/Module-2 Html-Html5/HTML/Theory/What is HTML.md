#What is HTML?
HTML (HyperText Markup Language) is the standard language used to create the structure of web pages. Think of it as the "skeleton" of a website—it defines where headings, paragraphs, images, and links go.
Key Characteristics:
HyperText: This refers to the "links" that connect web pages. It allows users to click and navigate from one page to another.
Markup Language: Unlike a programming language (which uses logic and math), a markup language uses tags to annotate text so that a browser knows how to display it.
Case Insensitive: HTML doesn't care if you write <html>, <Html>, or <HTML>. However, using lowercase is the modern industry standard.
File Extensions: HTML files must be saved with a .html or .htm extension.
History Note: While Tim Berners-Lee invented HTML at CERN, the first official version (HTML 1.0) was released in 1993, though he began developing it in the late 1980s.
The Anatomy of Hypertext
The most common example of "Hypertext" is the Anchor Tag (<a>).
<a href="https://www.blinkit.com">Visit Blinkit</a>



<a></a>: The tag itself (the "hook").
href: An attribute that stands for "Hypertext Reference." It tells the browser the destination URL.
The HTML Boilerplate (Structure)
Every HTML document follows a standard skeleton. This is often called a "Boilerplate."

<!DOCTYPE html> <html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Webpage</title>
    
    <link rel="stylesheet" href="style.css"> <script src="script.js"></script> </head>
<body>
    <h1>Welcome to My Site</h1>
    <p>Contact me at: 9998003879</p>
</body>
</html>



Understanding HTML Tags
Tags are the building blocks of HTML. They are generally categorized into two types:
1. Paired (Container) Tags
These tags have an opening and a closing tag. Anything placed inside them is affected by the tag.
Examples: <p>...</p>, <h1>...</h1>, <div>...</div>, <table>...</table>.
2. Non-Paired (Self-Closing/Empty) Tags
These tags do not need a closing tag because they just insert something into the page.
Examples: * <br> (Line break)
<hr> (Horizontal line)
<img> (Image)
<meta> (Metadata)

