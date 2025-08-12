# 🎨 Customizer Color Switcher Theme

A WordPress theme with **Customizer color picker + live CSS variable-based color change** using Tailwind CSS.  
Easily change the hero section title, subtitle, button text, URL, and theme colors **live** from the WordPress Customizer.

---

## 📂 Theme Folder Structure

customizer-color-switcher/
│
├── assets/
├── dist/
├── node_modules/
├── screenshots/
│ ├── theme-folder-structure.png
│ ├── screenshot-customizer-ui.png
│ ├── frontend-hero-section.png
│ └── screenshot-tailwind-build.png
├── src/
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── package.json
├── package-lock.json
├── postcss.config.js
├── style.css
├── tailwind.config.js

---

## 🖼️ Screenshots

| Theme Folder Structure | Customizer UI | Frontend Hero Section | Tailwind Build |
|------------------------|--------------|-----------------------|----------------|
| ![Theme Folder](screenshots/theme-folder-structure.png) | ![Customizer UI](screenshots/screenshot-customizer-ui.png) | ![Frontend](screenshots/frontend-hero-section.png) | ![Tailwind Build](screenshots/screenshot-tailwind-build.png) |

---

## ⚡ Features
- 🎨 **Theme Color Switcher** via WordPress Customizer  
- 🖌 **Live Preview** with JavaScript & wp.customize API  
- 💨 **Tailwind CSS Integration** with PostCSS build  
- 📱 Fully responsive hero section layout  
- 🛠 Easy to customize and extend

---

## 📦 Installation
1. Download or clone the repository.
2. Place the folder inside `/wp-content/themes/`.
3. Activate the theme from **Appearance > Themes** in WordPress.
4. Go to **Appearance > Customize** to change hero section content & theme colors.

---

## 🛠️ Build Tailwind CSS
To update styles after editing `src/input.css` or Tailwind config:
```bash
npx tailwindcss -i ./src/input.css -o ./dist/style.css --watch

👨‍💻 Developed By
Mahbub Shaki
WordPress Theme Developer | Tailwind CSS Enthusiast
🌐 Upwork Profile
📧 mahbubshaki64@gmail.com
