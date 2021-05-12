# card_test


1. Copy module in modules/custom
2. If you dont have paragraph module , install it : composer require 'drupal/paragraphs:^1.12'
3. Install module from /admin/modules
4. Add 2 cards from /admin/structure/card by filling the fields.
5. Add a custom block of type "Card Listing type" /block/add and select both the cards from the list. Name it "Card listing"
6. Add the posibility of layout builder in the simple page (or any other content type) admin/structure/types/manage/page/display
7. Manage the layout of that content type /admin/structure/types/manage/page/display/default/layout
8. Add section named for example : "Cards section"
9. Add two "Card listing" blocks and select his View mode (first Portrait and second Landscape)
