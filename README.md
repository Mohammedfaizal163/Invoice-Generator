# 🧾 Laravel Invoice Generator

A simple Laravel-based invoice generator that calculates totals (including tax), stores invoice records in the database, and sends confirmation emails using queued jobs and event listeners.

---

## 🚀 Features

- ✅ Invoice form with client details, item info, quantity, price, and tax
- 📦 Price calculation using a dedicated Service class
- 🧠 Event and Listener system to handle email sending
- ⏳ Email dispatch using Laravel Queues (`database` driver)
- 📨 Mailtrap integration for safe email testing
- 🗃️ Job queue monitoring and fail-safe handling

---

## 📬 Email Setup Using Mailtrap

1. Go to [https://mailtrap.io](https://mailtrap.io) and **sign up**.
2. Create a new **Inbox** under the **Sandbox** section.
3. Open the inbox → click **Integrations → Laravel 9+** → copy the SMTP config.
4. Paste this into your `.env` file
5. Make Sure to `copy .env.example .env` to make .env and configure the database to run the migration
6. run `php artisan queue:work` before using the form 
---

## 📂 Project Structure

```text
app/
├── Events/InvoiceCreated.php
├── Listeners/SendInvoiceEmail.php
├── Mail/InvoiceMail.php
├── Services/PriceCalculator.php
├── Models/InvoiceLog.php

resources/
└── views/email/invoiceMail.blade.php

routes/
└── web.php
