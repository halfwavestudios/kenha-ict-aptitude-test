# 🚧 KeNHA ICT Officer II Aptitude Test Web App

An interactive **60-Question | 60-Minute** aptitude test simulator designed to help candidates prepare for the **ICT Officer II (Grade 8)** recruitment test at the **Kenya National Highways Authority (KeNHA)**.

This lightweight web application replicates the **structure and pressure of a real government aptitude test**, allowing candidates to practice reasoning, ICT fundamentals, and technical concepts.

---

## 🎯 Purpose

This project was built to:

- Simulate the **Kenyan Public Service Commission style aptitude test**
- Help candidates **practice under real exam conditions**
- Strengthen knowledge in **ICT and logical reasoning**
- Demonstrate **PHP development skills**

---

## ✨ Features

🧠 **Realistic Exam Simulation**

- **60 questions**
- **60 minute countdown timer**
- **Auto-submission when time expires**

📄 **Simple Navigation**

- One question per page
- Previous / Next navigation
- Clear layout for exam focus

💾 **Session Based Answer Saving**

- Answers are saved using PHP sessions
- Prevents loss of progress during the test

📊 **Detailed Results**

At the end of the exam the system displays:

- Total Score
- Percentage
- Correct Answers
- Review of all questions

💻 **Technical Coverage**

Questions cover key areas expected in ICT Officer aptitude tests:

- General Logical Reasoning
- Computer Fundamentals
- Networking
- Databases
- Web Development
- PHP Concepts
- ICT Problem Solving

---

## 🛠 Tech Stack

| Technology | Purpose |
|------------|--------|
| **PHP 7.4+** | Backend logic |
| **HTML5** | Structure |
| **CSS3** | Styling |
| **JavaScript** | Countdown timer |
| **PHP Sessions** | Answer persistence |

⚡ No database required — questions are stored in a **PHP array**.

---

## 📂 Project Structure

```
kenha-ict-aptitude-test/
│
├── index.php        # Start exam page
├── questions.php    # All questions stored in PHP array
├── process.php      # Handles answer saving
├── submit.php       # Displays final results
└── README.md
```

---

## ⚙️ Local Setup

Run this project locally using **XAMPP, WAMP, MAMP or PHP built-in server**.

### 1️⃣ Download or Clone

```bash
git clone https://github.com/yourusername/kenha-ict-aptitude-test.git
```

### 2️⃣ Move Project

Place the folder inside:

```
xampp/htdocs/
```

### 3️⃣ Start Apache

Open **XAMPP Control Panel** and start **Apache**.

### 4️⃣ Run in Browser

```
http://localhost/kenha-ict-aptitude-test/index.php
```

---

## 🌍 Deployment

You can deploy the project for online practice using free hosting:

- **InfinityFree**
- **000WebHost**
- **Render**
- **Railway**
- **AwardSpace**

Once deployed, update this section:

```
Live Demo: https://your-link-here.com
```

---

## 🧪 How the Exam Works

1️⃣ Candidate starts the test  
2️⃣ Timer begins counting down from **60 minutes**  
3️⃣ Each page displays **one question**  
4️⃣ Answers are stored in **session variables**  
5️⃣ When finished or when time expires → exam **auto-submits**  
6️⃣ Results page shows **score and detailed feedback**

---

## 📈 Future Improvements

Possible upgrades for the project:

- 🔐 Admin panel for adding questions
- 📊 Performance analytics
- 🧠 Randomized questions
- 📱 Mobile-optimized UI
- 🗄 MySQL database for storing attempts
- 👥 Multi-user support

---

## 👨‍💻 Author

**Abdinasir Mohamed Aden**

IT & Digital Media Specialist  
Front-End Web Developer  
Graphic Designer & Social Media Manager – **Bandari FC**

📍 Mombasa, Kenya

---

## 📜 License

This project is created for **educational and practice purposes**.

---

## ⭐ Support

If this project helps you prepare for ICT aptitude tests, consider giving it a **⭐ star on GitHub**.

---

> *Practice like it's the real exam.*
