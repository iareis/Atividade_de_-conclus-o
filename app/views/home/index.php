<!DOCTYPE html>
<html lang="en">

<!-- HEAD E CABEÇALHO -->
<?php $this->view('home/head'); ?>
<!-- fim HEAD E CABEÇALHO -->

<body id="page-top">
    <!-- Navigation-->
    <?php $this->view('home/navigation'); ?>
    <!-- fim Navigation-->

    <!-- Masthead-->
    <?php $this->view('home/masterhead'); ?>
    <!-- fim Masthead-->

    <!-- M O D A L I D A D E S-->
    <?php $this->view('home/modalidades'); ?>
    <!-- fim M O D A L I D A D E S-->

    <!-- A V E N T U R A S-->
    <?php $this->view('home/aventuras'); ?>
    <!-- fim A V E N T U R A S-->

    <!-- R E G I S T R O S-->
    <?php $this->view('home/registros'); ?>
    <!-- fim R E G I S T R O S-->

    <!-- HISTORIA-->
    <?php $this->view('home/historia'); ?>
    <!-- fim HISTORIA-->

    <!-- Team-->
    <?php $this->view('home/time'); ?>
    <!-- fim Team-->

    <!-- Contact-->
    <?php $this->view('home/contact'); ?>
    <!-- fim Contact-->

    <!-- Footer-->
    <?php $this->view('home/footer'); ?>
    <!-- Footer-->

    <!-- Portfolio Modals-->
    <?php $this->view('home/modalidadesfull'); ?>
    <!-- fim Portfolio Modals-->

    <!-- Fotografia Bird-->
    <?php $this->view('home/registrosfull'); ?>
    <!-- Fotografia Bird-->

    <!-- JavaScript -->
    <?php $this->view('home/javas'); ?>
    <!-- JavaScript -->

</body>

</html>