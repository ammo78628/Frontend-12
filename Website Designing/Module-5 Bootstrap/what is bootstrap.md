# Bootstrap Complete Guide

## What is Bootstrap?

Bootstrap is a free, open-source CSS framework used to develop responsive, mobile-first websites. It provides pre-designed components, a 12-column grid system, and CSS utilities that simplify web development.

### Key Features:
- **Responsive Design**: Mobile-first approach that adapts to all screen sizes
- **Pre-built Components**: Buttons, forms, navigation bars, cards, modals, etc.
- **Grid System**: 12-column layout for organizing content
- **CSS Utilities**: Ready-made classes for spacing, sizing, colors, and more
- **JavaScript Components**: Interactive elements like dropdowns, carousels, tooltips
- **Cross-browser Support**: Works on modern browsers

---

## Installation Methods

### 1. **CDN (Content Delivery Network)**
Fastest way to get started without downloading:

```html
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
```

### 2. **Download Bootstrap Files**
- Visit [getbootstrap.com](https://getbootstrap.com)
- Download the compiled CSS and JS files
- Extract and link in your HTML

```html
<link rel="stylesheet" href="path/to/bootstrap.min.css">
<script src="path/to/bootstrap.bundle.min.js"></script>
```

### 3. **NPM (Node Package Manager)**
For projects using Node.js:

```bash
npm install bootstrap
```

Then import in your project:
```javascript
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
```

### 4. **Using Build Tools (Webpack, Vite, etc.)**
```bash
npm install bootstrap sass
```

---

## How Bootstrap Works

### 1. **Grid System**
Bootstrap uses a 12-column responsive grid:

```html
<div class="container">
  <div class="row">
    <div class="col-md-6">Half width on medium screens</div>
    <div class="col-md-6">Half width on medium screens</div>
  </div>
</div>
```

### 2. **Breakpoints (Responsive)**
- `xs`: Extra small (<576px)
- `sm`: Small (≥576px)
- `md`: Medium (≥768px)
- `lg`: Large (≥992px)
- `xl`: Extra large (≥1200px)
- `xxl`: Extra extra large (≥1400px)

### 3. **Container Types**
- `.container`: Fixed width (responsive)
- `.container-fluid`: Full width

### 4. **Common Classes**

**Margin & Padding:**
```html
<div class="m-3">Margin: 3 units all sides</div>
<div class="p-5">Padding: 5 units all sides</div>
<div class="mt-2">Margin-top: 2 units</div>
```

**Flexbox Utilities:**
```html
<div class="d-flex justify-content-center align-items-center">Centered</div>
```

**Text Utilities:**
```html
<p class="text-center">Centered text</p>
<p class="text-primary">Blue text</p>
<p class="fw-bold">Bold text</p>
```

### 5. **Pre-built Components**

**Button:**
```html
<button class="btn btn-primary">Click me</button>
<button class="btn btn-success">Success</button>
```

**Alert:**
```html
<div class="alert alert-warning">Warning message</div>
```

**Card:**
```html
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Title</h5>
    <p class="card-text">Content here</p>
  </div>
</div>
```

**Navigation Bar:**
```html
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button">Menu</button>
  </div>
</nav>
```

**Form:**
```html
<form>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
```

### 6. **JavaScript Components**
Require Bootstrap JS to function:

**Modal:**
```html
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">Modal content</div>
    </div>
  </div>
</div>
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Open</button>
```

**Carousel:**
```html
<div id="carousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="img1.jpg"></div>
    <div class="carousel-item"><img src="img2.jpg"></div>
  </div>
</div>
```

---

## Basic HTML Structure

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Welcome to Bootstrap</h1>
    <p class="text-center text-muted">Responsive web design made easy</p>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

---

## Advantages of Bootstrap

✅ Saves development time
✅ Ensures mobile responsiveness
✅ Consistent design across browsers
✅ Large community support
✅ Easy to customize and extend
✅ Great documentation

---

## Disadvantages

❌ Large file size
❌ Many websites look similar
❌ Learning curve for beginners
❌ Requires Bootstrap knowledge
