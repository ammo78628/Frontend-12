---
name: Clinical Clarity
colors:
  surface: '#f8f9ff'
  surface-dim: '#cbdbf5'
  surface-bright: '#f8f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#eff4ff'
  surface-container: '#e5eeff'
  surface-container-high: '#dce9ff'
  surface-container-highest: '#d3e4fe'
  on-surface: '#0b1c30'
  on-surface-variant: '#444651'
  inverse-surface: '#213145'
  inverse-on-surface: '#eaf1ff'
  outline: '#757682'
  outline-variant: '#c5c5d3'
  surface-tint: '#4059aa'
  primary: '#00236f'
  on-primary: '#ffffff'
  primary-container: '#1e3a8a'
  on-primary-container: '#90a8ff'
  inverse-primary: '#b6c4ff'
  secondary: '#006a61'
  on-secondary: '#ffffff'
  secondary-container: '#86f2e4'
  on-secondary-container: '#006f66'
  tertiary: '#4b1c00'
  on-tertiary: '#ffffff'
  tertiary-container: '#6e2c00'
  on-tertiary-container: '#f39461'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#dce1ff'
  primary-fixed-dim: '#b6c4ff'
  on-primary-fixed: '#00164e'
  on-primary-fixed-variant: '#264191'
  secondary-fixed: '#89f5e7'
  secondary-fixed-dim: '#6bd8cb'
  on-secondary-fixed: '#00201d'
  on-secondary-fixed-variant: '#005049'
  tertiary-fixed: '#ffdbcb'
  tertiary-fixed-dim: '#ffb691'
  on-tertiary-fixed: '#341100'
  on-tertiary-fixed-variant: '#773205'
  background: '#f8f9ff'
  on-background: '#0b1c30'
  surface-variant: '#d3e4fe'
typography:
  display-lg:
    fontFamily: Inter
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  display-lg-mobile:
    fontFamily: Inter
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
    letterSpacing: -0.01em
  headline-lg:
    fontFamily: Inter
    fontSize: 30px
    fontWeight: '600'
    lineHeight: 38px
  headline-md:
    fontFamily: Inter
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '500'
    lineHeight: 20px
    letterSpacing: 0.01em
  label-sm:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 8px
  xs: 4px
  sm: 12px
  md: 24px
  lg: 48px
  xl: 80px
  container-max: 1280px
  gutter: 24px
---

## Brand & Style
The design system is engineered for high-stakes healthcare environments, prioritizing immediate legibility, cognitive ease, and a sense of institutional stability. The brand personality is "Expertly Calm"—a fusion of clinical precision and empathetic care.

The visual style leans into **Modern Corporate** aesthetics with a focus on **Spaciousness**. It utilizes generous white space to reduce patient anxiety and structured information hierarchies to ensure clarity. Elements are approachable through soft geometry, while maintaining a professional rigor that evokes trust. Accessibility is the foundational pillar, ensuring that every interaction is inclusive and easy to navigate for users of all ages and abilities.

## Colors
The palette is rooted in medical tradition but executed with modern vibrancy. 

- **Primary (Navy Blue):** Used for core branding, primary actions, and navigational anchors to establish authority and trust.
- **Secondary (Calming Teal):** Reserved for success states, wellness-focused messaging, and secondary call-to-actions to provide a soothing counterpoint to the deep navy.
- **Neutral:** A range of slate grays is used for body text and borders to maintain high contrast without the harshness of pure black.
- **System Colors:** High-visibility red for alerts and soft amber for warnings are used sparingly to ensure critical information is never missed.

## Typography
This design system utilizes **Inter** for its exceptional legibility and neutral, systematic character. The type scale is generous, favoring larger base sizes to accommodate users with varying visual acuity. 

Headlines use a tighter letter-spacing and heavier weights to command attention, while body text maintains a rhythmic line-height to facilitate long-form reading of medical information. Labels are set in a medium weight to ensure they remain distinct from body copy at smaller sizes.

## Layout & Spacing
The layout employs a **Fluid Grid** model based on an 8px spacing system. For desktop, a 12-column grid is used with 24px gutters and 48px side margins. On mobile devices, the layout collapses to a 4-column grid with 16px margins.

Spacing is used intentionally to create "breathing room." Hero sections and major content blocks use `spacing.xl` to maintain a premium, uncluttered feel. Interactive components like cards and forms use `spacing.md` for internal padding to ensure touch targets are spacious and accessible.

## Elevation & Depth
Depth is conveyed through **Ambient Shadows** and **Tonal Layers**. Instead of harsh black shadows, we use low-opacity Navy Blue tints to maintain a clean, integrated look.

- **Level 1 (Surface):** Default background state.
- **Level 2 (Cards):** Subtle shadow (Y: 4px, Blur: 12px, Opacity: 6% Navy) to lift information off the background.
- **Level 3 (Overlays/Modals):** Pronounced shadow (Y: 12px, Blur: 24px, Opacity: 12% Navy) to focus attention.

We avoid heavy borders, preferring light gray outlines (1px, #e2e8f0) for interactive elements to maintain a lightweight feel.

## Shapes
The shape language is defined by **Rounded (Level 2)** corners. 
- Standard buttons and inputs utilize a 0.5rem (8px) radius.
- Large containers, such as Appointment Cards and Doctor Profiles, utilize a `rounded-2xl` (1rem / 16px) radius to emphasize a friendly and modern approachable feel.
- Icons are housed in circular or soft-square frames to maintain visual consistency.

## Components

### Hero Sections
Heros should utilize a split layout. One side contains a high-contrast headline and primary CTA (Navy), while the other features high-quality imagery or a calming teal gradient background. Ensure a minimum 4.5:1 contrast ratio for all text overlaying images.

### Appointment Cards
Cards must feature a `rounded-2xl` corner radius. They should include a clear date/time badge using the teal accent, a brief summary of the department, and a primary action button for "Manage Appointment." Use Level 2 elevation to make them feel "tappable."

### Doctor Profiles
Profiles should lead with a circular avatar. Credentials (e.g., MD, PhD) use `label-sm` styling. Include a clear "Bio" section using `body-md` and a secondary button for "View Full Profile."

### Form Inputs
Inputs use a white fill with a 1px slate-200 border. Labels must always be visible (avoid placeholder-only labels). On focus, the border transitions to Primary Navy with a 2px outer glow in light blue to clearly indicate the active state.

### Chips & Badges
Use for status indicators (e.g., "Confirmed," "Pending"). Use secondary teal for positive states and light neutrals for informational states. Chips should be pill-shaped to differentiate them from actionable buttons.