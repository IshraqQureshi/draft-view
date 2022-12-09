@extends('layouts.frontend')

@section('content')
    
    <section id="hero-section" class="section top-section">
        <div class="container">
            <div class="flex-row">
                <div class="hero--content col-2">
                    <h1>Showcase your professional experience with an <span class="highlight">expertly written resume</span></h1>
                    <p>Showcase your professional experience with an expertly written resume</p>
                    <div class="hero--content-btn_wraper">
                        <a href="#" class="btn">Upgrade My Resume</a>
                    </div>
                </div>
                <div class="hero--image col-2">
                    <img src="/images/hero.png" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>

    <section id="options-section">
        <div class="container">
            <div class="flex-row flex-align">
                <div class="options-heading col-5">
                    <h3>Are You <span class="highlight-2">Looking</span> For?</h3>
                </div>
                <div class="options-box col-5">
                    <div class="options--icon">
                        <img src="/images/cv-write.png" alt="Resume & CV Writing">
                    </div>
                    <div class="options--name">
                        <h4>Resume & CV Writing</h4>
                    </div>
                </div>
                <div class="options-box col-5">
                    <div class="options--icon">
                        <img src="images/cover-letter.png" alt="Cover Letter">
                    </div>
                    <div class="options--name">
                        <h4>Cover Letter</h4>
                    </div>
                </div>
                <div class="options-box col-5">
                    <div class="options--icon">
                        <img src="images/cv-edit.png" alt="Resume & CV Editing">
                    </div>
                    <div class="options--name">
                        <h4>Resume & CV Editing</h4>
                    </div>
                </div>
                <div class="options-box col-5">
                    <div class="options--icon">
                        <img src="images/linked-write.png" alt="Linkedin Resume Writing">
                    </div>
                    <div class="options--name">
                        <h4>Linkedin Resume Writing</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="calculate-section" class="section">
        <div class="container">
            <div class="calculate-section--header">
                <h2>Land On Your <span class="highlight">Dream Job</span> With Professional Resume</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            </div>
            <div class="flex-row calculate-section--row">
                <div class="calculate-section--content col-60">
                    <h3>How Much Would resume writing service Cost Me?</h3>
                    <ul class="calculate-section--list">
                        <li>There are roughly 3-Level Resume builder
                            <ol>
                                <li>Junior Level Resume</li>
                                <li>Mid Level Resume</li>
                                <li>Senior / Executive Resume</li>
                            </ol>
                        </li>
                        <li><strong>Professional CV</strong> writing costs starting from <strong>$50-$70</strong> for Junior level and it goes up to <strong>$150</strong> for executive level.</li>
                        <li><strong>Professional CV</strong> writing costs starting from <strong>$50-$70</strong> for Junior level and it goes up to <strong>$150</strong> for executive level.</li>
                        <li><strong>Professional CV</strong> writing costs starting from <strong>$50-$70</strong> for Junior level and it goes up to <strong>$150</strong> for executive level.</li>
                    </ul>
                </div>
                <div class="calculate-section--calculator col-40">
                    <div class="calculate-section--calculator-wrapper">
                        <h3>Calculate the price</h3>
                        <form>
                            <div class="calculator--field">
                                <select name="type">
                                    <option value="resume">Resume</option>
                                    <option value="resume">Cover Letter</option>
                                    <option value="resume">LinkedIn Resume</option>
                                </select>
                            </div>
                            <div class="calculator--field">
                                <select name="experience">
                                    <option value="entry">Junior/Entry Level</option>
                                    <option value="mid">Mid Level</option>
                                    <option value="senior">Senior Level</option>
                                </select>
                            </div>
                            <div class="calculator--field">
                                <select name="duration">
                                    <option value="3">3-Days</option>
                                    <option value="5">5-Days</option>
                                    <option value="7">7-Days</option>
                                </select>
                            </div>
                            <div class="calculator--submit">
                                <div class="calculator--price">
                                    <img src="/images/coin.svg" alt="Coin">
                                    <h3>$50<span>.00</span></h3>
                                </div>
                                <div class="calculator--btn">
                                    <button name="calculate">Proceed to Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection