<?php
   class fetchData {
       public function fetchJournals($conn) {
           $getJournals = $conn->query("SELECT * FROM journals");
           while($journalsData = $getJournals->fetch_assoc()) {
               echo "<option value='".$journalsData['id']."'>".$journalsData['journal_name']."</option>";
           }
           
       }


       public function fetchPaidItems($conn, $userId, $baseURL) {
           $premiumItems = $conn->query("SELECT * FROM paiditems WHERE payer_id = '$userId'");
           if(!mysqli_num_rows($premiumItems)) {
               echo "You don't have any premium items.";
           } else {
               $serialNumber = 0;
               while($paidItems = $premiumItems->fetch_assoc()) {
                   $serialNumber++;
                   if($paidItems['item_type']=="journal_items") {
                       $itemType = "Journal";
                       $itemid = $paidItems['item_id'];
                       //die($itemid);
                       //var_dump($paidItems);
                       $fetchJournalFiles = $conn->query("SELECT * FROM journal_items WHERE id = '$itemid'");
                       $journalFile = $fetchJournalFiles->fetch_assoc();
                       //var_dump($journalFile);
                       $file = str_replace("..", "", $journalFile['file_url']);
                       $link = $baseURL."/viewJournal.php?journalid=".$journalFile['id'];
                   } else {
                       $itemType = "CEERS Article";
                       $itemid = $paidItems['item_id'];
                       $fetchArticleFiles = $conn->query("SELECT * FROM seers WHERE id = '$itemid'");
                       $articleFile = $fetchArticleFiles->fetch_assoc();
                       $file = str_replace("..", "", $articleFile['file_url']);
                       $link = $baseURL."/viewArticle.php?articleid=".$articleFile['id'];
                   }
                   echo "<tr>
                        <td>".$serialNumber."</td>
                        <td>".$paidItems['item_name']."</td>
                        <td>".$paidItems['pay_date']."</td>
                        <td>".$itemType."</td>
                        <td><a href='".$link."'><button class='btn btn-primary'><i class='fa fa-eye'></i>View</button></a></td>
                        </tr>";
                       // $serialNumber++;

               }
           }
       }
   }

   $dataMethods = new fetchData();

?>