# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview
This is a static landing page for "Research Based Early Learning" with modern design, micro-animations, and email functionality. The design follows the visual language from kidjoy.webflow.io.

## Commands

### Development
```bash
# Start local development server
python3 -m http.server 8000

# Or using Node.js if available
npx serve .

# Or using PHP if available
php -S localhost:8000
```

### Email Testing
```bash
# Test contact form submission (requires email service configuration)
curl -X POST http://localhost:8000/contact.php -d "name=Test&email=test@example.com&message=Test message"
```

## Architecture

### File Structure
- `index.html` - Main landing page with semantic HTML5 structure
- `styles.css` - CSS with custom properties, animations, and responsive design
- `script.js` - JavaScript for micro-animations, form handling, and smooth scrolling
- `contact.php` - Server-side email handler (if PHP hosting) or use EmailJS for client-side
- `images/` - Optimized images following the playful, educational theme

### Design System

#### Colors (Based on ELG Logo)
- Primary Blue: #4A90E2 (from logo)
- Secondary Light Blue: #6CADDC
- Accent Teal: #5DADE2
- Light Gray: #F5F5F5
- Background White: #FFFFFF
- Text Dark: #2C3E50
- Text Gray: #666666

#### Typography
- Headings: 'Montserrat', sans-serif
- Body: 'Open Sans', sans-serif
- Font weights: 300, 400, 600, 700

#### Animations
- Scroll-triggered fade-ins using Intersection Observer
- Hover effects with transform and transition
- Curved SVG transitions between sections
- Floating elements with CSS keyframes

### Key Sections
1. **Hero Section** - Full viewport with animated background shapes
2. **About/Features** - Grid layout with icon cards and micro-animations
3. **Programs/Services** - Alternating image/text blocks with curved backgrounds
4. **Contact Form** - Modern form with validation and email integration

### Email Integration Options
1. **EmailJS** (Client-side): Use service_id and template_id in script.js
2. **PHP Mail** (Server-side): Configure SMTP in contact.php
3. **Netlify Forms** (Static hosting): Add netlify attribute to form

### Performance Considerations
- Lazy load images with loading="lazy"
- Optimize images to WebP format with fallbacks
- Minify CSS/JS for production
- Use CSS containment for animation performance

### Responsive Breakpoints
- Mobile: < 768px
- Tablet: 768px - 1024px
- Desktop: > 1024px

### Accessibility
- ARIA labels for interactive elements
- Focus states for keyboard navigation
- Alt text for all images
- Color contrast ratio minimum 4.5:1