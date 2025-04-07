<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT  Projects Hub</title>
    <link rel="shortcut icon" href="Logo.jpg" type="image/x-icon">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --success-color: #2ecc71;
            --whatsapp-color: #25D366;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: var(--dark-color);
            line-height: 1.6;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
        }
        
        .logo span {
            color: var(--accent-color);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 1.5rem;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        nav ul li a:hover {
            color: var(--accent-color);
        }
        
        .hero {
            background: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            height: 400px;
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            color: white;
            width: 60%;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .hero p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }
        
        .btn {
            display: inline-block;
            background: var(--primary-color);
            color: white;
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        .btn-accent {
            background: var(--accent-color);
        }
        
        .btn-accent:hover {
            background: #c0392b;
        }
        
        .btn-whatsapp {
            background: var(--whatsapp-color);
        }
        
        .btn-whatsapp:hover {
            background: #128C7E;
        }
        
        .section-title {
            text-align: center;
            margin: 3rem 0;
            font-size: 2rem;
            color: var(--secondary-color);
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .project-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .project-img {
            height: 200px;
            overflow: hidden;
        }
        
        .project-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .project-card:hover .project-img img {
            transform: scale(1.1);
        }
        
        .project-info {
            padding: 1.5rem;
        }
        
        .project-info h3 {
            margin-bottom: 0.5rem;
            color: var(--secondary-color);
        }
        
        .project-info p {
            color: #7f8c8d;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        
        .project-price {
            font-weight: 700;
            color: var(--accent-color);
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .payment-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 100;
            justify-content: center;
            align-items: center;
        }
        
        .modal-content {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            width: 90%;
            max-width: 500px;
            position: relative;
        }
        
        .close-modal {
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark-color);
        }
        
        .payment-form h3 {
            margin-bottom: 1.5rem;
            color: var(--secondary-color);
        }
        
        .form-group {
            margin-bottom: 1rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-group input, .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .payment-details {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 5px;
            margin: 1.5rem 0;
        }
        
        .payment-details p {
            margin-bottom: 0.5rem;
        }
        
        .bank-details {
            font-weight: 700;
            color: var(--secondary-color);
        }
        
        .whatsapp-instructions {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 5px;
            margin: 1.5rem 0;
            border-left: 4px solid var(--whatsapp-color);
        }
        
        footer {
            background: var(--secondary-color);
            color: white;
            padding: 2rem 0;
            text-align: center;
            margin-top: 3rem;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        
        .footer-section {
            flex: 1;
            min-width: 250px;
            margin-bottom: 1.5rem;
        }
        
        .footer-section h3 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .footer-section p, .footer-section a {
            color: #bdc3c7;
            text-decoration: none;
        }
        
        .footer-section a:hover {
            color: white;
        }
        
        .copyright {
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid #34495e;
            font-size: 0.9rem;
            color: #bdc3c7;
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            
            nav ul {
                margin-top: 1rem;
                justify-content: center;
            }
            
            nav ul li {
                margin: 0 0.5rem;
            }
            
            .hero-content {
                width: 100%;
                text-align: center;
            }
            
            .footer-content {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <div class="logo">IT<span>Portfolio</span>Hub</div>
            <nav>
                <ul>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#how-it-works">How It Works</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="hero">
        <div class="container hero-content">
            <div>
                <h1>Premium IT Projects for Your Portfolio</h1>
                <p>Get exclusive, portfolio-ready projects for only R20 each. Once purchased, the project is yours alone and removed from our collection.</p>
                <a href="#projects" class="btn btn-accent">Browse Projects</a>
            </div>
        </div>
    </section>
    
    <section id="projects" class="container">
        <h2 class="section-title">Featured Projects</h2>
        
        <div class="projects-grid">
            <!-- Project 1 -->
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="E-commerce Website">
                </div>
                <div class="project-info">
                    <h3>E-commerce Platform</h3>
                    <p>Full-stack e-commerce website with product catalog, cart, and payment integration.</p>
                    <div class="project-price">R10.00</div>
                    <button class="btn purchase-btn" data-project="E-commerce Platform">Purchase Project</button>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Task Management App">
                </div>
                <div class="project-info">
                    <h3>Task Management App</h3>
                    <p>React-based task manager with drag-and-drop functionality and team collaboration.</p>
                    <div class="project-price">R10.00</div>
                    <button class="btn purchase-btn" data-project="Task Management App">Purchase Project</button>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Weather Application">
                </div>
                <div class="project-info">
                    <h3>Weather Forecast App</h3>
                    <p>Real-time weather application using API integration with 5-day forecasts.</p>
                    <div class="project-price">R10.00</div>
                    <button class="btn purchase-btn" data-project="Weather Forecast App">Purchase Project</button>
                </div>
            </div>
            
            <!-- Project 4 -->
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Social Media Dashboard">
                </div>
                <div class="project-info">
                    <h3>Social Media Dashboard</h3>
                    <p>Analytics dashboard for social media metrics with data visualization.</p>
                    <div class="project-price">R10.00</div>
                    <button class="btn purchase-btn" data-project="Social Media Dashboard">Purchase Project</button>
                </div>
            </div>
            
            <!-- Project 5 -->
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Student Management System">
                </div>
                <div class="project-info">
                    <h3>Student Management System</h3>
                    <p>Complete CRUD application for managing student records and grades.</p>
                    <div class="project-price">R10.00</div>
                    <button class="btn purchase-btn" data-project="Student Management System">Purchase Project</button>
                </div>
            </div>
            
            <!-- Project 6 -->
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Recipe Finder">
                </div>
                <div class="project-info">
                    <h3>Recipe Finder App</h3>
                    <p>Search and save recipes with ingredient filtering and meal planning.</p>
                    <div class="project-price">R10.00</div>
                    <button class="btn purchase-btn" data-project="Recipe Finder App">Purchase Project</button>
                </div>
            </div>
            
            <!-- Project 7 -->
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Inventory System">
                </div>
                <div class="project-info">
                    <h3>Inventory Management System</h3>
                    <p>Track products, stock levels, and generate reports with this inventory system.</p>
                    <div class="project-price">R10.00</div>
                    <button class="btn purchase-btn" data-project="Inventory Management System">Purchase Project</button>
                </div>
            </div>
            
            <!-- Project 8 -->
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Fitness Tracker">
                </div>
                <div class="project-info">
                    <h3>Fitness Tracker App</h3>
                    <p>Track workouts, set goals, and visualize progress with charts and graphs.</p>
                    <div class="project-price">R10.00</div>
                    <button class="btn purchase-btn" data-project="Fitness Tracker App">Purchase Project</button>
                </div>
            </div>
            
            <!-- Project 9 -->
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Blog Platform">
                </div>
                <div class="project-info">
                    <h3>Blog Platform with CMS</h3>
                    <p>Content management system for bloggers with markdown support.</p>
                    <div class="project-price">R10.00</div>
                    <button class="btn purchase-btn" data-project="Blog Platform with CMS">Purchase Project</button>
                </div>
            </div>
            
            <!-- Project 10 -->
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Expense Tracker">
                </div>
                <div class="project-info">
                    <h3>Personal Expense Tracker</h3>
                    <p>Track income and expenses with categorization and monthly reports.</p>
                    <div class="project-price">R10.00</div>
                    <button class="btn purchase-btn" data-project="Personal Expense Tracker">Purchase Project</button>
                </div>
            </div>
            
            <!-- Project 11 -->
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Chat Application">
                </div>
                <div class="project-info">
                    <h3>Real-time Chat Application</h3>
                    <p>Socket.io based chat app with rooms and private messaging.</p>
                    <div class="project-price">R10.00</div>
                    <button class="btn purchase-btn" data-project="Real-time Chat Application">Purchase Project</button>
                </div>
            </div>
            
            <!-- Project 12 -->
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Job Board">
                </div>
                <div class="project-info">
                    <h3>Job Board Platform</h3>
                    <p>Job listing platform with search filters and employer dashboard.</p>
                    <div class="project-price">R10.00</div>
                    <button class="btn purchase-btn" data-project="Job Board Platform">Purchase Project</button>
                </div>
            </div>
        </div>
    </section>
    
    <section id="how-it-works" class="container">
        <h2 class="section-title">How It Works</h2>
        <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); margin-bottom: 3rem;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <div style="text-align: center;">
                    <div style="background: var(--primary-color); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-weight: bold;">1</div>
                    <h3 style="margin-bottom: 0.5rem;">Choose a Project</h3>
                    <p>Browse our collection of portfolio-ready IT projects and select one that fits your needs.</p>
                </div>
                <div style="text-align: center;">
                    <div style="background: var(--primary-color); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-weight: bold;">2</div>
                    <h3 style="margin-bottom: 0.5rem;">Make Payment</h3>
                    <p>Pay R10 via EFT to our bank account and send payment proof via WhatsApp.</p>
                </div>
                <div style="text-align: center;">
                    <div style="background: var(--primary-color); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-weight: bold;">3</div>
                    <h3 style="margin-bottom: 0.5rem;">Admin Approval</h3>
                    <p>Our team verifies your payment (usually within 24 hours).</p>
                </div>
                <div style="text-align: center;">
                    <div style="background: var(--primary-color); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-weight: bold;">4</div>
                    <h3 style="margin-bottom: 0.5rem;">Get the Project</h3>
                    <p>Once approved, you will receive your project in your Email or whatsapp.</p>
                </div>
            </div>
        </div>
    </section>
    <div id="payment-modal" class="payment-modal">
    <div class="modal-content" style="max-width: 800px; width: 90%;">
        <span class="close-modal">&times;</span>
        <div class="payment-form" style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px; padding-right: 20px;">
                <h3 style="margin-bottom: 1.5rem;">Purchase <span id="project-title"></span></h3>
                <div style="background: #f8f9fa; padding: 1rem; border-radius: 5px; margin-bottom: 1.5rem;">
                    <p style="margin-bottom: 0.5rem;"><strong>Payment Instructions:</strong></p>
                    <p style="margin-bottom: 0.5rem;">Please make a payment of <strong>R20.00</strong> to:</p>
                    <p style="font-weight: 700; color: #2c3e50; margin-bottom: 0.5rem;">
                        Bank: Standard Bank<br>
                        Account Name: IT Portfolio Hub<br>
                        Account Number: 1831972202<br>
                        Branch Code: 051001
                    </p>
                    <p style="margin-bottom: 0;">Use your name as reference.</p>
                </div>
                
                <form action="https://api.web3forms.com/submit" method="POST" style="max-width: 600px; margin: 0 auto; padding: 2rem; background: #ffffff; border-radius: 12px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">

<!-- Replace with your Access Key -->
<input type="hidden" name="access_key" value="3315f2dc-08a9-4f8c-af3e-af7b6d654798">

<h2 style="color: #2c3e50; margin-bottom: 1.5rem; text-align: center;">Contact Us</h2>

<div style="margin-bottom: 1.5rem;">
    <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #2c3e50;">Your Name</label>
    <input type="text" name="name" id="name" required 
           style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;">
</div>

<div style="margin-bottom: 1.5rem;">
    <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #2c3e50;">Email Address</label>
    <input type="email" name="email" id="email" required 
           style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;">
</div>





<button type="submit" 
        style="background: #3498db; color: white; padding: 12px 24px; border: none; border-radius: 8px; font-size: 1rem; font-weight: 500; cursor: pointer; transition: all 0.3s ease; width: 100%;">
   I`ve sent  proof of payment
</button>

<style>
    input:focus, textarea:focus {
        outline: none;
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
    }
    
    button:hover {
        background: #2980b9;
        transform: translateY(-2px);
    }
    
    button:active {
        transform: translateY(0);
    }
</style>
</form>
            </div>
            
            <div style="flex: 1; min-width: 300px; border-left: 1px solid #eee; padding-left: 20px;">
                <div style="background: #f8f9fa; padding: 1rem; border-radius: 5px; border-left: 4px solid #25D366; margin-bottom: 1.5rem;">
                    <h4 style="margin-bottom: 0.5rem;">Send Payment Proof via WhatsApp</h4>
                    <p style="margin-bottom: 0.5rem;">After payment, send these to our WhatsApp:</p>
                    <ol style="margin-left: 1.5rem; margin-top: 0.5rem; margin-bottom: 1rem;">
                        <li style="margin-bottom: 0.3rem;">Screenshot of payment confirmation</li>
                        <li style="margin-bottom: 0.3rem;">Your full name</li>
                        <li style="margin-bottom: 0.3rem;">Project name</li>
                        <li style="margin-bottom: 0.3rem;">Payment reference number</li>
                    </ol>
                    <a id="whatsapp-link" href="#" style="display: inline-block; background: #25D366; color: white; padding: 0.7rem 1.5rem; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; font-weight: 500; transition: all 0.3s ease; width: 100%; text-align: center; margin-top: 1rem; display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 8px;">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.479 5.392 1.479 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                        </svg>
                        Send Payment Proof via WhatsApp
                    </a>
                </div>
                
                <div style="background: #f8f9fa; padding: 1rem; border-radius: 5px;">
                    <h4 style="margin-bottom: 0.5rem;">Important Notes</h4>
                    <ul style="margin-left: 1.5rem; margin-top: 0.5rem;">
                        <li style="margin-bottom: 0.3rem;">Projects are removed after purchase</li>
                        <li style="margin-bottom: 0.3rem;">Download link sent after verification</li>
                        <li style="margin-bottom: 0.3rem;">Processing time: 24-48 hours</li>
                        <li style="margin-bottom: 0.3rem;">Contact us if any issues</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <section id="contact" style="background: var(--light-color); padding: 3rem 0;">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <div style="max-width: 600px; margin: 0 auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
            <form action="https://api.web3forms.com/submit" method="POST" style="max-width: 600px; margin: 0 auto; padding: 2rem; background: #ffffff; border-radius: 12px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">

<!-- Replace with your Access Key -->
<input type="hidden" name="access_key" value="3315f2dc-08a9-4f8c-af3e-af7b6d654798">
<p>We, also offer help with online certificate , get in touch by contacting us if interested! </p>
<h2 style="color: #2c3e50; margin-bottom: 1.5rem; text-align: center;">Contact Us</h2>

<div style="margin-bottom: 1.5rem;">
    <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #2c3e50;">Your Name</label>
    <input type="text" name="name" id="name" required 
           style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;">
</div>

<div style="margin-bottom: 1.5rem;">
    <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #2c3e50;">Email Address</label>
    <input type="email" name="email" id="email" required 
           style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;">
</div>

<div style="margin-bottom: 1.5rem;">
    <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #2c3e50;">Your Message</label>
    <textarea name="message" id="message" required rows="5"
              style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease; resize: vertical;"></textarea>
</div>



<button type="submit" 
        style="background: #3498db; color: white; padding: 12px 24px; border: none; border-radius: 8px; font-size: 1rem; font-weight: 500; cursor: pointer; transition: all 0.3s ease; width: 100%;">
    Submit Form
</button>

<style>
    input:focus, textarea:focus {
        outline: none;
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
    }
    
    button:hover {
        background: #2980b9;
        transform: translateY(-2px);
    }
    
    button:active {
        transform: translateY(0);
    }
</style>
</form>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About IT Portfolio Hub</h3>
                    <p>Providing exclusive, portfolio-ready projects for IT students to showcase their skills and stand out in the job market.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="#projects">Browse Projects</a></p>
                    <p><a href="#how-it-works">How It Works</a></p>
                    <p><a href="#contact">Contact Support</a></p>
                </div>
                <div class="footer-section">
                    <h3>Contact Details</h3>
                    <p>WhatsApp: +27 824 148 720</p>
                    <p>Email: 221509313@edu.vut.ac.za</p>
                    <p>Bank: Standard Bank 1831972202</p>
                </div>
            </div>
            <div class="copyright">
                &copy; 2023 IT Portfolio Hub. All rights reserved.
            </div>
        </div>
    </footer>
    
    <script>
        // WhatsApp number - replace with your actual number
        const whatsappNumber = "27824148720";
        
        // Simple modal functionality
        document.querySelectorAll('.purchase-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const projectTitle = this.getAttribute('data-project');
                document.getElementById('project-title').textContent = projectTitle;
                
                // Update WhatsApp link with project info
                const whatsappLink = document.getElementById('whatsapp-link');
                whatsappLink.href = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
                    `Payment Proof for ${projectTitle}\n\n` +
                    `Name: \n` +
                    `Payment Reference: \n` +
                    `Amount: R20.00\n\n` +
                    `(Attach screenshot of payment confirmation)`
                )}`;
                
                document.getElementById('payment-modal').style.display = 'flex';
            });
        });
        
        document.querySelector('.close-modal').addEventListener('click', function() {
            document.getElementById('payment-modal').style.display = 'none';
        });
        
        document.getElementById('payment-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const fullName = document.getElementById('full-name').value;
            const email = document.getElementById('email').value;
            
            alert(`Thank you, ${fullName}! We've received your information. You will receive an email to ${email} with download instructions once your payment is verified (usually within 24 hours).`);
            document.getElementById('payment-modal').style.display = 'none';
            
            // In a real implementation, you would send this data to your backend
            // and the admin would review the WhatsApp payment proof before enabling download
        });
        
        // Close modal when clicking outside
        window.addEventListener('click', function(e) {
            if (e.target === document.getElementById('payment-modal')) {
                document.getElementById('payment-modal').style.display = 'none';
            }
        });
    </script>
</body>
</html>