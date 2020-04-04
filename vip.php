<!DOCTYPE html>
<html class="vip" lang="sk">
    <?php include('includes/head.php'); ?>  

    <body>
        <?php include('includes/nav.php'); ?> 
        <div class="vipFlexWrapper">
            <div class="vipBlock vip1">
                <div class="vip1Top">
                    <img class="swordImg1" src="images/ironSpade.png" alt="sword">
                    <img class="vipGold" src="images/iron.png" alt="dia">
                    <img class="swordImg2" src="images/ironSpade2.png" alt="sword">
                    <div class="vipCart">
                        <strong class="vipName">Iron</strong>
                        <ul class="benefits">
                            <li>N-word pass</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                        </ul>
                        <form>
                            <ul class="iron radios">
                                <li>
                                    <input type="radio" class="ironRadio timeRadio" id="ironMesiac" name="iron" value="male" checked = "checked">
                                    <label onclick="changePrice(this.id)" id="iron30" class="ironRadio" for="ironMesiac">30 dní</label><br>
                                </li>
                                <li>
                                    <input type="radio" class="ironRadio timeRadio" id="ironRok" name="iron" value="female">
                                    <label onclick="changePrice(this.id)" id="iron1" class="ironRadio" for="ironRok">1 rok</label><br>
                                </li>
                            </ul>
                            <b id="ironCena" class="cost">2&euro;</b>
                            <input type="submit" class="vipBtnIronBuy vipBtnBuy" value="KÚPIŤ">
                        </form>
                    </div>
                </div>
            </div>
           

            <div class="vipBlock vip2">
                <div class="vip2Top">
                    <img class="swordImg1" src="images/goldAxe.png" alt="axe">
                    <img class="vipGold" src="images/gold.png" alt="dia">
                    <img class="axeImg2" src="images/goldAxe2.png" alt="axe">
                    <div class="vipCart">
                        <strong class="vipName">Gold</strong>
                        <ul class="benefits">
                            <li>N-word pass</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                        </ul>
                        <form>
                            <ul class="gold radios">
                                <li>
                                    <input type="radio" class="goldRadio timeRadio" id="goldMesiac" name="gold" value="male" checked = "checked">
                                    <label onclick="changePrice(this.id)" id="gold30" class="goldRadio" for="goldMesiac">30 dní</label><br>
                                </li>
                                <li>
                                    <input type="radio" class="goldRadio timeRadio" id="goldRok" name="gold" value="female">
                                    <label onclick="changePrice(this.id)" id="gold1" class="goldRadio" for="goldRok">1 rok</label><br>
                                </li>
                            </ul>
                            <b id="goldCena" class="cost">3&euro;</b>
                            <input type="submit" class="vipBtnGoldBuy vipBtnBuy" value="KÚPIŤ">
                        </form>
                    </div>
                </div>
            </div>

            <div class="vipBlock vip3">
                <div class="vip3Top">
                    <img class="swordImg1" src="images/diamondSword.png" alt="sword">
                    <img class="vipDia" src="images/diamondBig.png" alt="dia">
                    <img class="swordImg2" src="images/diamondSword2.png" alt="sword">
                    <div class="vipCart">
                        <strong class="vipName">Diamond</strong>
                        <ul class="benefits">
                            <li>N-word pass</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                            <li>Nejaká zaujímavá výhoda</li>
                        </ul>
                        <form>
                            <ul class="dia radios">
                                <li>
                                    <input type="radio" class="diaRadio timeRadio" id="diaMesiac" name="dia" value="male" checked = "checked">
                                    <label onclick="changePrice(this.id)" id="dia30" class="diaRadio" for="diaMesiac">30 dní</label><br>
                                </li>
                                <li>
                                    <input type="radio" class="diaRadio timeRadio" id="diaRok" name="dia" value="female">
                                    <label onclick="changePrice(this.id)" id="dia1" class="diaRadio" for="diaRok">1 rok</label><br>
                                </li>
                            </ul>
                            <b id="diaCena" class="cost">5&euro;</b>
                            <input type="submit" class="vipBtnDiaBuy vipBtnBuy" value="KÚPIŤ">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("navbar");
                if (x.className === "navbar") {
                    x.className += " responsive";
                } 
                else {
                    x.className = "navbar";
                }
            } 
            </script>
              <?php include('includes/footer.php'); ?>  
    </body>
</html>