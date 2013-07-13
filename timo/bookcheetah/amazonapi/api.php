

<?php
    if(isset($_GET['booksearch'])) {
        /* Example usage of the Amazon Product Advertising API */
        include("amazon_api_class.php");

        $obj = new AmazonProductAPI();
        $result ='' ;
        try
        {
            $result = $obj->searchProducts($_GET['booksearch'],
                                           AmazonProductAPI::DVD,
                                           "TITLE");
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
        
        //print_r($result);
        print_r($result->Items);
        // foreach (($result->Items) as $item) {
        //     print_r($item[0]);
        // }
    }
    /*
    echo "Sales Rank : {$result->Items->Item->SalesRank}<br>";
    echo "ASIN : {$result->Items->Item->ASIN}<br>";
    echo "<br><img src=\"" . $result->Items->Item->MediumImage->URL . "\" /><br>";
    */

?>

<form action="Example.php">
    <input name="booksearch" type="text">
</form> 