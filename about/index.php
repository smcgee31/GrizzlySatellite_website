<?php include("../header.php"); ?>
<?php
$technicians = array(
    array("name" => "Steve McGee", "image" => "2014_Steve McGee.jpg", "title" => "THE Owner", "info" => "Steve is the primary owner and controller of everything that happens within Grizzly Satellite. He is the boss of EVERYONE! Steve is a wonderful guy who has been installing satellite television for close to 7 years and as such is the BOMB.com of all things DISH&reg; related!"),
    array("name" => "Mark Bridgewater", "image" => "2012_Mark Bridgewater.jpg", "title" => "Sub-Owner", "info" => "Mark thinks that he is sometimes, somehow, the co-owner if Grizzly Satellite and tries to throw his weight around. He will try to boss the guys and tell them what to do but always defers to the orders of the real owner of Grizzly... Steve."),
    array("name" => "Roscoe Crawford", "image" => "2014_Roscoe Crawford.jpg", "title" => "Technician", "info" => "Roscoe is a simpleton who, in a moment of weakness, I let Mark hire. Sometimes he does ok but most of the time Roscoe will just do what he wants and since he isn't really an employee we have to let him get away with it. Mostly because I'm a pushover and won't really get after anyone!"),
)

?>
<div class="techs_container">
    <div class="under_spacer"></div>
    <h1>Meet our technicians...</h1>
    <div class="techs">
        <?php foreach ($technicians as $technician) { ?>
            <div class="tech">
                <img src="../img/<?php echo $technician['image']; ?>" alt="<?php echo $technician['name'] . " - " . $technician['title']; ?>" title="<?php echo $technician['name'] . " - " . $technician['title']; ?>">
                <div>
                    <h2><?php echo $technician['name']; ?><span><?php echo $technician['title']; ?></span></h2>
                    <p><?php echo $technician['info']; ?></p>
                </div>
            </div>
            <div class="clear_both"></div>
        <?php } ?>
            

    </div>
    <div class="under_spacer"></div>
</div>
<?php include("../footer.php"); ?>
