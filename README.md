# 1. PROJECT TITLE & DESCRIPTION

## BubbleUp Laundry Tracker
**BubbleUp Laundry Tracker** is a professional, responsive multi-page web application interface engineered to streamline, monitor, and manage operations for a commercial laundry facility hub. Developed as a high-fidelity frontend prototype, this system applies advanced web design layout methodologies, distinct typography hierarchies, utility grid structures, and interactive analytics to deliver an intuitive administrative management simulation experience.

# 2. FEATURES INCLUDED

- **Secure Simulated Authentication Gateway:** An entry gate screen layout (`index.html`) that locks application sub-pages until administrative validation parameters pass. It features a custom error feedback panel component (`#errorAlert`) that dynamically unhides to provide real-time user validation alerts.
- **Persistent Responsive Navigation Framework:** A clean, matching sticky top header navigation menu matching all app pages. Engineered using Bootstrap flex-utilities to cleanly scale down into a collapsible mobile button toggle menu without text overlapping.
- **Operational Summary Indicator Cards:** Four operational data cards positioned on the main landing views tracking live metric integers (Total Tracked Items, Active Loads, Ready for Pickup, and Monthly Maintenance Costs).
- **Comprehensive Visual Analytics Engine (6 Interactive Charts):** An analytical reporting suite leveraging **Chart.js** on the main dashboard layout to render six detailed graphical visualization sets:
  1. *Current Processing Status* (Doughnut Chart)
  2. *Monthly Laundry Load Volume* (Line Chart with tension curves)
  3. *Clothes Type Distribution* (Horizontal Bar Chart)
  4. *Weekly Frequency Distribution* (Vertical Bar Chart)
  5. *Resource Cost Analysis* (Stacked Bar Chart monitoring Utilities & Detergents)
  6. *Temperature Settings Share* (Pie Chart Matrix)
- **Structured Multi-Dataset Views:** - **Active Processing Orders (`active-orders.html`):** A professional, hover-responsive table grid display that monitors tracking codes (Batch IDs), submission dates, load weights (kg), custom wash settings badges, and multi-tier operational status tags.
  - **Clothing Inventory & Care Logs (`clothing-inventory.html`):** A custom grid directory layout sorting specific high-value customer items into category rows (Delicates, Bedding, Athleisure) paired with corresponding colored temperature wash care instruction badges.

# 3. INSTRUCTIONS TO TEST LOGIN

To execute, load, and test the validation authorization script parameters of this multi-page web application on your local machine, follow these steps:

1. Locate the single, unified project root directory on your desktop containing your 4 structural template files:
   - `index.html`
   - `dashboard.html`
   - `active-orders.html` *(Note: Ensure this filename matches your code nav linkage)*
   - `clothing-inventory.html`
2. Open the entry gateway file (**`index.html`**) by double-clicking it or dragging it into any modern web browser software (e.g., Google Chrome, Microsoft Edge, Safari, or Mozilla Firefox).
3. On the interface sign-in form box card, type the exact hardcoded simulation parameters into the input text boxes:
   - **Username:** `User`
   - **Password:** `pass321`
4. Click the blue **"Login"** form submission button. 
5. If the hardcoded string conditions match, the native JavaScript browser engine will execute local storage session injection (`localStorage.setItem('isLoggedIn', 'true')`) and route you straight to `dashboard.html`.
6. *To test the failure feedback loop:* Type an incorrect set of strings into the input fields and click login. The engine will instantly remove the `.d-none` utility class from the error card markup element, presenting a red alert box stating *"Invalid username or password!"*.

# 4. FRAMEWORKS/LIBRARIES USED

- **Bootstrap v5.3.2 UI Framework (via CDN Linkage):** Deployed across all 4 separate pages to handle structural grid borders, text-color palettes, flex-alignment rules, cards layout, hover table models, navigation headers, and responsive layout scaling metrics.
- **Chart.js Graphic Engine Library (via CDN Linkage):** Integrated on the analytical hub to draw, fill, and animate six distinct high-performance responsive canvas visual graphs with hover tooltip indicators.
- **Font Awesome v6.4.0 Icon Library (via CDN Linkage):** Provides a clean, modern vector iconography library used uniformly for button elements, navigation categories, data logs, metric summary headers, and operational alert modules.
- **Vanilla JavaScript (Native ES6 Browser Runtime Engine):** Utilized to build front-end application rules, form interception logic (`preventDefault()`), string validation algorithms, state-dependent route block guards, and local session removal methods (`localStorage.removeItem`).
