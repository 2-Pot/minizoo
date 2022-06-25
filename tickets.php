<?php require 'src/php/header.php'; ?>

<div clas="content">
    <div class="main-wrapper">
        <span>
            <h1 class="title-element align-center">Select your prices</h1>
        </span>
        <div class="block small-p">
            <ul class="price-list">
                <li>
                    <div class="wrapper">
                        <div class="price-line">
                            <p class="text-main condensed bold">Normal price</p>
                            <span class="line"></span>
                            <p class="text-black small"> 25€ </p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="number-wrapper">
                            <input type="number" min="0" id="form-number">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wrapper">
                        <div class="price-line">
                            <p class="text-main condensed bold">
                                Student
                                <span class="tootip min-width dark tooltip-on-top ml-0-5">
                                    <span class="icon information-mark tooltip-trigger"></span>
                                </span>
                            </p>
                            <span class="line"></span>
                            <p class="text-black small"> 20€ </p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="number-wrapper">
                            <input type="number" min="0" id="form-number">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wrapper">
                        <div class="price-line">
                            <p class="text-main condensed bold">
                                Under 16 years old
                                <span class="tootip min-width dark tooltip-on-top ml-0-5">
                                    <span class="icon information-mark tooltip-trigger"></span>
                                </span>
                            </p>
                            <span class="line"></span>
                            <p class="text-black small"> 15€ </p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="number-wrapper">
                            <input type="number" min="0" id="form-number">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wrapper">
                        <div class="price-line">
                            <p class="text-main condensed bold">
                                Annual Pass Normal
                                <span class="tootip min-width dark tooltip-on-top ml-0-5">
                                    <span class="icon information-mark tooltip-trigger"></span>
                                </span>
                            </p>
                            <span class="line"></span>
                            <p class="text-black small"> 75€ </p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="number-wrapper">
                            <input type="number" min="0" id="form-number">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wrapper">
                        <div class="price-line">
                            <p class="text-main condensed bold">
                                Annual Pass under 16 years old
                                <span class="tootip min-width dark tooltip-on-top ml-0-5">
                                    <span class="icon information-mark tooltip-trigger"></span>
                                </span>
                            </p>
                            <span class="line"></span>
                            <p class="text-black small"> 55€ </p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="number-wrapper">
                            <input type="number" min="0" id="form-number">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="validate">
            <a href="payment.php">
                <button class="validate-btn" type="button">Validate</button>
            </a>        
        </div>
    </div>
</div>

<?php require 'src/php/footer.php'; ?>

</body>
</html>