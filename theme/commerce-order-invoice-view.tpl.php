<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  </head>
  <body>
    <table width="100%" border="0" cellspacing="0" cellpadding="1" align="center">
      <tr>
        <td>
          <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center" bgcolor="#FFF" style="font-family: verdana, arial, helvetica;">
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: verdana, arial, helvetica;">
                  <tr>
                    <td nowrap="nowrap" style="line-height: 1.6em;" valign="middle">
											<!-- Invoice Header -->
											<img src="<?php print $info['site_logo']; ?>" />
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: verdana, arial, helvetica;">
                  <tr>
                    <th colspan="2"><?php print t('Order Summary'); ?></th>
                  </tr>
                  <tr>
                    <td colspan="2">

                      <table class="details" width="100%" cellspacing="0" cellpadding="0" style="font-family: verdana, arial, helvetica;">
                        <tr>
                          <td valign="top" width="50%">
                            <br/>
                            <b><?php print t('Order Date'); ?></b> <?php print date('j F, Y', $info['order_created']); ?><br/>
                            <br/>
                            <b><?php print t('Billing Address'); ?></b><br />
                            <?php print isset($info['customer_billing']) ? $info['customer_billing'] : ''; ?><br />
                          </td>
                          <td valign="top" width="50%">
                            <br/>
                            <b><?php print t('Web Order No'); ?></b> <?php print $info['order_number']; ?><br/>
                            <br/>
                            <b><?php print t('Shipping Address'); ?></b><br />
                            <?php print isset($info['customer_shipping']) ? $info['customer_shipping'] : ''; ?><br />
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <?php if(isset($info['opmerkingen'])): ?>
            <tr>
              <td>
                <table class="remarks">
                  <tr><th><?php print t('Remarks') ?></th></tr>
                  <tr>
                    <td>
                      <?php print $info['opmerkingen']; ?>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <?php endif; ?>
            <tr>
              <td>
                <table class="products" width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family: verdana, arial, helvetica;">
                  <tbody>
                    <tr>
                      <td class="line-items"><?php print isset($info['line_items']) ? $info['line_items'] : ''; ?></td>
                    </tr>
                  </tbody>
                </table>
                <table class="total" width="100%" border="0" cellspacing="0" cellpadding="1" align="center" style="font-family: verdana, arial, helvetica;">
                  <tbody>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="price"><?php print isset($info['order_total']) ? $info['order_total'] : ''; ?></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table>
                  <tr>
                    <td class="footer">
                      <!-- Invoice Header -->
											+31 (0)26 319 5159 - <a href="mailto:info@drukwerkmax.nl">info@drukwerkmax.nl</a> - Geograaf 38 6921 EW Duiven<br />
                      ABN AMRO: 43.48.94.109 - IBAN: NL45ABNA0434894109 - SWIFT: ABNANL2A - KvK: 56996721 - BTW: NL852395231B01
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
