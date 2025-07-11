<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why We Need Pets - Pet Paradise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa; /* Light grey background */
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://via.placeholder.com/1500x500/87CEEB/FFFFFF?text=Happy+Pets') no-repeat center center; /* Placeholder image, replace with a real one */
            background-size: cover;
            color: white;
            padding: 80px 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .review-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            min-height: 200px; /* Ensure cards have similar height */
        }
        .review-card:hover {
            transform: translateY(-5px);
        }
        .review-rating {
            color: #ffc107; /* Bootstrap's warning color for stars */
        }
        .footer {
            background-color: #343a40; /* Dark grey footer */
            color: white;
            padding: 20px 0;
            margin-top: 50px;
        }
        /* Responsive image in the benefits section */
        .benefit-img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-img-top-custom {
            height: 200px; /* Fixed height for benefit images */
            object-fit: cover; /* Cover the area, crop if necessary */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Pet Paradise</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#benefits">Benefits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-3">The Unconditional Love of Pets</h1>
            <p class="lead mb-4">Discover the profound reasons why our lives are richer with furry, feathered, or scaly companions by our side.</p>
            <a href="#benefits" class="btn btn-primary btn-lg">Explore Benefits</a>
        </div>
    </header>

    <main class="container my-5" id="benefits">
        <section class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-4">Why Pets Are More Than Just Companions</h2>
            <p class="lead text-muted">From boosting our mood to improving our health, the advantages of having a pet are endless.</p>
        </section>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x200/FFD700/000000?text=Emotional+Support" class="card-img-top-custom" alt="Emotional Support Pet">
                    <div class="card-body">
                        <h5 class="card-title">Emotional Support & Companionship</h5>
                        <p class="card-text">Pets offer unconditional love, reduce feelings of loneliness, and provide comfort during stressful times. Their presence can significantly improve mental well-being.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x200/98FB98/000000?text=Health+Benefits" class="card-img-top-custom" alt="Person walking dog">
                    <div class="card-body">
                        <h5 class="card-title">Physical Health Improvement</h5>
                        <p class="card-text">Owning a pet, especially a dog, encourages physical activity. Regular walks and playtime contribute to a healthier lifestyle and can lower blood pressure.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x200/ADD8E6/000000?text=Social+Connection" class="card-img-top-custom" alt="People with pets socializing">
                    <div class="card-body">
                        <h5 class="card-title">Enhanced Social Connections</h5>
                        <p class="card-text">Pets are great icebreakers! They can facilitate new friendships and social interactions, helping owners connect with other pet enthusiasts.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x200/DDA0DD/000000?text=Sense+of+Purpose" class="card-img-top-custom" alt="Child with pet">
                    <div class="card-body">
                        <h5 class="card-title">A Sense of Purpose & Routine</h5>
                        <p class="card-text">Caring for a pet provides routine and responsibility, which can be particularly beneficial for older adults or individuals seeking more structure in their day.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x200/FFB6C1/000000?text=Stress+Reduction" class="card-img-top-custom" alt="Pet relaxing with owner">
                    <div class="card-body">
                        <h5 class="card-title">Stress & Anxiety Reduction</h5>
                        <p class="card-text">Interacting with pets can release oxytocin, a hormone associated with bonding and well-being, leading to lower stress levels and reduced anxiety.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x200/AFEEEE/000000?text=Learning+Responsibility" class="card-img-top-custom" alt="Kids with pets learning responsibility">
                    <div class="card-body">
                        <h5 class="card-title">Teaching Responsibility & Empathy</h5>
                        <p class="card-text">For children, caring for a pet teaches invaluable lessons about responsibility, empathy, and the life cycle, fostering compassion and nurturing skills.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="container my-5" id="reviews">
        <h2 class="text-center display-5 fw-bold mb-4">What Our Community Says</h2>
        <p class="text-center lead text-muted mb-5">Hear inspiring stories from pet owners around the world.</p>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="p-4 review-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/60/0000FF/FFFFFF?text=JS" class="rounded-circle me-3" alt="John Smith" width="60" height="60">
                        <div>
                            <h5 class="mb-0">John S.</h5>
                            <div class="review-rating">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i> (4.5/5)
                            </div>
                        </div>
                    </div>
                    <p class="text-muted">"My dog, Buddy, has truly changed my life. His endless energy and affection remind me to live in the moment. I can't imagine a day without him."</p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 review-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/60/FF0000/FFFFFF?text=AM" class="rounded-circle me-3" alt="Alice M." width="60" height="60">
                        <div>
                            <h5 class="mb-0">Alice M.</h5>
                            <div class="review-rating">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> (5/5)
                            </div>
                        </div>
                    </div>
                    <p class="text-muted">"My cat, Luna, is the most calming presence in my home. After a long day, just petting her melts away all my stress. Highly recommend pet ownership!"</p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 review-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/60/008000/FFFFFF?text=RK" class="rounded-circle me-3" alt="Rahul K." width="60" height="60">
                        <div>
                            <h5 class="mb-0">Rahul K.</h5>
                            <div class="review-rating">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i> (4/5)
                            </div>
                        </div>
                    </div>
                    <p class="text-muted">"My parrot, Polly, is a constant source of entertainment. While demanding, the joy she brings to our family is immeasurable. It's truly a unique bond."</p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 review-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/60/FFA500/FFFFFF?text=SF" class="rounded-circle me-3" alt="Sarah F." width="60" height="60">
                        <div>
                            <h5 class="mb-0">Sarah F.</h5>
                            <div class="review-rating">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> (5/5)
                            </div>
                        </div>
                    </div>
                    <p class="text-muted">"Our guinea pigs, Peanut and Butter, have taught my kids so much about responsibility and compassion. They're tiny bundles of joy!"</p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 review-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/60/800080/FFFFFF?text=DP" class="rounded-circle me-3" alt="David P." width="60" height="60">
                        <div>
                            <h5 class="mb-0">David P.</h5>
                            <div class="review-rating">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i> (3/5)
                            </div>
                        </div>
                    </div>
                    <p class="text-muted">"Having a fish tank is surprisingly meditative. It adds a peaceful element to my living room. Maintenance is key, but worth it for the tranquility."</p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 review-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/60/00FFFF/FFFFFF?text=LM" class="rounded-circle me-3" alt="Liam M." width="60" height="60">
                        <div>
                            <h5 class="mb-0">Liam M.</h5>
                            <div class="review-rating">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i> (4.5/5)
                            </div>
                        </div>
                    </div>
                    <p class="text-muted">"My tortoise, Sheldon, is a long-term commitment, but so rewarding. Watching him explore and grow has been a unique experience."</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5" id="contact">
        <h2 class="text-center display-5 fw-bold mb-4">Share Your Pet Story!</h2>
        <p class="text-center lead text-muted mb-4">We'd love to hear why your pet is important to you.</p>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form>
                    <div class="mb-3">
                        <label for="reviewName" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="reviewName" placeholder="John Doe" required>
                    </div>
                    <div class="mb-3">
                        <label for="reviewEmail" class="form-label">Email address (Optional)</label>
                        <input type="email" class="form-control" id="reviewEmail" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="reviewRating" class="form-label">Overall Rating</label>
                        <select class="form-select" id="reviewRating" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="5">5 Stars - Absolutely amazing!</option>
                            <option value="4">4 Stars - Very good</option>
                            <option value="3">3 Stars - Good</option>
                            <option value="2">2 Stars - Okay</option>
                            <option value="1">1 Star - Not so good</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="reviewText" class="form-label">Your Story / Review</label>
                        <textarea class="form-control" id="reviewText" rows="5" placeholder="Tell us how your pet has impacted your life..." required></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-lg">Submit Your Review</button>
                    </div>
                </form>
                <p class="text-center text-muted mt-3"><small>Note: This form is for demonstration. A backend system is required to save reviews.</small></p>
            </div>
        </div>
    </section>


    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2025 Pet Paradise. All rights reserved.</p>
            <p>Made with <i class="bi bi-heart-fill text-danger"></i> and Bootstrap</p>
            <div>
                <a href="#" class="text-white me-2">Privacy Policy</a> |
                <a href="#" class="text-white ms-2">Terms of Service</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</body>
</html>