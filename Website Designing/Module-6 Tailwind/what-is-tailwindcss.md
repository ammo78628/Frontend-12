# What is Tailwind CSS?

Tailwind CSS is a utility-first CSS framework used to build modern, responsive, and highly customizable user interfaces quickly.

Unlike traditional frameworks such as Bootstrap, Tailwind does not provide prebuilt components like buttons or cards by default. Instead, it gives you low-level utility classes such as `flex`, `pt-4`, `text-center`, and `bg-blue-500` that you can combine directly in your HTML or JSX.

## Why Developers Use Tailwind CSS

Tailwind is popular because it makes styling faster and more flexible.

### 1. Utility-first workflow

Instead of writing custom CSS classes like `.sidebar-inner-wrapper`, you can style elements directly in your markup.

Example:

```html
<div class="text-xl text-gray-800 font-semibold">
  Hello Tailwind!
</div>
```

### 2. Responsive design made easy

Tailwind uses mobile-first breakpoints, making it simple to build responsive layouts.

Example:

```html
<div class="w-full md:w-1/2 lg:w-1/3">
  Responsive box
</div>
```

### 3. Hover, focus, and interaction states

You can apply styles for different states without writing extra CSS.

```html
<button class="bg-blue-500 hover:bg-blue-700 focus:outline-none">
  Click me
</button>
```

### 4. Highly customizable

Tailwind includes a strong default design system, but you can extend it through the configuration file to match your brand or project needs.

### 5. Small production CSS size

During production builds, Tailwind removes unused classes, so the final CSS file stays compact and efficient.

### 6. Freedom to build your own components

Tailwind does not lock you into a predefined component system. It gives you flexibility to design your own UI while still supporting libraries such as DaisyUI, Flowbite, and Shadcn UI.

## Tailwind CSS vs. Bootstrap

| Feature | Tailwind CSS | Bootstrap |
|--------|--------------|-----------|
| Approach | Utility-first | Component-based |
| Design flexibility | Very high | Moderate |
| Learning curve | Slightly higher at first | Lower |
| Production file size | Usually small | Usually larger |

## How to Install Tailwind CSS

The most common way to install Tailwind is through npm using the Tailwind CLI.

### Step 1: Install Tailwind and its dependencies

Run the following command in your project folder:

```bash
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init
```

This creates a `tailwind.config.js` file.

### Step 2: Configure template paths

Update your configuration file so Tailwind can scan your HTML and JavaScript files:

```js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {},
  },
  plugins: [],
};
```

### Step 3: Add Tailwind directives to your main CSS

In your main stylesheet, add:

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

### Step 4: Start the Tailwind build process

```bash
npx tailwindcss -i ./src/input.css -o ./src/output.css --watch
```

### Step 5: Link the generated CSS file

Add the output stylesheet to your HTML file:

```html
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./src/output.css" rel="stylesheet" />
  </head>
  <body>
    <h1 class="text-3xl font-bold underline text-blue-600">
      Hello world!
    </h1>
  </body>
</html>
```

## Summary

Tailwind CSS is a powerful framework for building modern interfaces quickly with clean utility classes. It is especially useful for developers who want flexibility, speed, and maintainable styling without relying on heavy prebuilt components.