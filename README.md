# SkynetA11y PDF Remediation (Thirty bees Module)

The **SkynetA11y PDF Remediation** addon brings **PDF Accessibility Remediation for WCAG & PDF/UA Compliance** directly into your Thirty bees Control Panel. It is both a **PDF Accessibility Checker** and an **AI Remediation Tool**: upload documents or crawl your website for them, let AI repair the accessibility barriers automatically, review every check that was applied, and download conformant files — without leaving your own admin area.

It fixes the barriers that make PDFs unusable with assistive technology: missing tags, incorrect reading order, inaccessible forms and tables, images without alternate text, and absent document structure, language and metadata.

It supports compliance with **WCAG 2.0, 2.1, 2.2, PDF/UA, ADA, Section 508, AODA, and EN 301 549 (EAA)**. With plain-language explanations and before/after examples for every check, even non-technical users can understand what was fixed and why it mattered.

This addon is designed for:

- Businesses of all sizes
- Enterprises
- Government and public sector entities
- Website owners
- E-commerce platforms
- Development and maintenance agencies

[**Start with a free AI remediation trial — up to 5 pages!**](https://www.skynettechnologies.com/pdf-accessibility-remediation)

## Why SkynetA11y PDF Remediation?

PDFs are where accessibility compliance quietly fails. A site can pass every page-level audit and still publish hundreds of untagged documents — reports, forms, invoices, policies — that screen readers cannot navigate at all.

Remediating them by hand is slow and expensive. This addon makes it a routine part of publishing: documents are discovered, repaired and re-checked inside the Control Panel your team already uses, so accessible PDFs become the default rather than a project.

## Key Features

- **SkynetA11y PDF Remediation** – Automated repair of tags, reading order, alt text, headings, tables and metadata.
- **PDF Accessibility Checker** – Every check reported individually, expandable   to a plain-language explanation and a before/after example.
- **Upload or Crawl** – Add files by drag and drop, or sweep your website for every PDF it links to.
- **Free Trial** – The free plan covers your first 5 pages; paid plans scale from 50 to 10,000 pages.
- **Bulk Remediation** – Select any number of documents and process them in one run, with live progress.
- **Deep Tag Scan** – Post-remediation verification against the document's tag tree, not just its declared metadata.
- **Authenticated Downloads** – Remediated files are delivered over an authenticated session, never a public link.
- **No Settings Screen** – Nothing to paste and nothing to wire up. One short dialog asks for a name, email and domain the first time it is needed, and never again.
- **Integration with All in One Accessibility® Dashboard** – Plans, usage and billing stay in one place.

## Compliance Standards Supported

- WCAG 2.0, 2.1, 2.2
- PDF/UA (ISO 14289)
- ADA
- Section 508
- AODA
- EN 301 549 (EU / European Accessibility Act)

### Prerequisites

- Thirty Bees version v1.6

## Installation

### Install the module via Thirty Bees Admin Panel:

1. Log in to your Thirty Bees Admin Panel.
2. Navigate to Modules and Services → Add a new module.
3. Choose the file "skyneta11ypdfremediation.zip" and click Upload this module.
4. After uploading, go to List of Modules – you should now see **SkynetA11y PDF Remediation** listed.
5. Click Install to complete the setup.
6. Once installed, you can enable or disable the module anytime from the Modules list.

## ⚙️ Configuration

1. In the Admin Panel, the module will appear in the sidebar menu as **SkynetA11y PDF Remediation**.
2. Click **SkynetA11y PDF Remediation** to configure the module.

## Demo URL

```https://thirtybees.skynettechnologies.us/```

## Usage

Open **Tools -> SkynetA11y PDF Remediation** in the Control Panel. The workspace has three tabs:

- **Upload** - drag and drop PDFs (up to 50 MB, unencrypted) and add them for AI remediation.
- **Website Scan** - crawl the connected domain for linked PDFs.
- **Remediated** - browse and download remediated PDFs.

The first time you upload a PDF or run a website scan, a short dialog asks for a name, email and domain. The name and email are pre-filled from the logged-in user and the domain defaults to the current site, so you usually just confirm. The account is provisioned only when you submit that dialog, and you are not asked again on that browser.

Access is gated by the **Access SkynetA11y PDF Remediation** permission, assignable under **Users -> Roles**.

## How It Works

1. **Add Your PDFs** – Upload files, or crawl your website for every PDF it links to.
2. **Run AI Remediation** – Select documents and process them in bulk; progress is reported live.
3. **Review & Download** – Inspect each accessibility check with its explanation and before/after example, then download the conformant file.

## Who Can Benefit?

- Website Owners & Businesses
- Developers & Web Agencies
- Government & Public Sector Organizations
- Education, Healthcare & Financial Institutions
- Legal & Compliance Teams
- Publishers & Content Teams
- E-commerce & SaaS Platforms

## CORS Policy Configuration

The dashboard calls the remediation API directly from the browser, so the API origin must allow your Control Panel origin. Ensure the following URLs are allowed in your CORS configuration or trusted domains list.

| **Domain**                                 | **Description**                     | **Usage**                              |
| ------------------------------------------ | ----------------------------------- | -------------------------------------- |
| `https://livepdfapi.skynettechnologies.us` | SkynetA11y PDF Remediation API      | Documents, remediation jobs, downloads |
| `https://ada.skynettechnologies.us`        | All in One Accessibility® Dashboard | Plan upgrades via autologin            |

### Instructions

1. Update your server's CORS configuration to include these URLs.
2. Ensure wildcard subdomains (`*`) are supported where necessary.
3. Verify the application functionality by testing requests to these domains.
4. If issues persist, consult the documentation for CORS configuration guidance.

If your site sends a `Content-Security-Policy`, both origins also need to be in its `connect-src`, or the browser will block the requests before they are made.

## Screenshots

![SkynetA11y_PDF_Accessibility_Remediation_Image_1](https://www.skynettechnologies.com/sites/default/files/SkynetA11yPDFRemediation/SkynetA11y-PDF-Remediation-Feature1.jpg)
![SkynetA11y_PDF_Accessibility_Remediation_Image_2](https://www.skynettechnologies.com/sites/default/files/SkynetA11yPDFRemediation/SkynetA11y-PDF-Remediation-Feature2.jpg)
![SkynetA11y_PDF_Accessibility_Remediation_Image_3](https://www.skynettechnologies.com/sites/default/files/SkynetA11yPDFRemediation/SkynetA11y-PDF-Remediation-Feature3.jpg)

## Submit a Support Request

Please visit our **[support page](https://www.skynettechnologies.com/report-accessibility-problem)** and fill out the form. Our team will get back to you as soon as possible.

## Send Us an Email

Alternatively, you can send an email to our support team: **[hello@skynettechnologies.com](mailto:hello@skynettechnologies.com)**

## Accessibility Partnership Opportunities

### [Accessibility Agency Partnership](https://www.skynettechnologies.com/agency-partners)

Partner with us as an agency to provide comprehensive accessibility solutions to your existing clients. Get access to exclusive resources, training, and support to help you implement and manage accessibility features effectively.

### [Accessibility Affiliate Partnership](https://www.skynettechnologies.com/affiliate-partner)

Join our affiliate program and earn hefty commissions by promoting SkynetA11y PDF Remediation. Share our accessibility solution within your network and help businesses improve their document accessibility while generating additional revenue.

For more details, please visit the **[Accessibility Partnership Opportunities Page](https://www.skynettechnologies.com/partner-program)**.

## Credits

This **SkynetA11y PDF Remediation** addon is developed and maintained by **[Skynet Technologies USA LLC](https://www.skynettechnologies.com)**.