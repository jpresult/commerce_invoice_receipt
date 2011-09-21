<style type="text/css">
  .products ul{
    display:none;
  }
  table th {
    background: none repeat scroll 0 0 #E1E2DC;
    border-color: #BEBFB9;
    border-style: solid;
    border-width: 1px;
    font-weight: normal;
    padding: 3px 10px;
    text-transform: uppercase;
  }
  tr.odd {
    background: none repeat scroll 0 0 #FFFFFF;
  }
  tr.even{
    background: none repeat scroll 0 0 #F3F4EE;
    border-color: #BEBFB9;
    border-style: solid;
    border-width: 0 1px;
  }
  .products table{
    width:100%;
  }
</style>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<table width="95%" border="0" cellspacing="0" cellpadding="1" align="center" style="border:1px solid #BEBFB9; font-family: verdana,arial,helvetica;">
  <tbody>
    <tr>
      <td style="padding: 8px 10px;">
        <table width="95%" border="0" cellspacing="0" cellpadding="1" align="center" style="border:1px solid #BEBFB9;">
          <tbody>
            <tr>
              <td style="padding: 8px 10px;">
                <img alt="logo" src="<?php print theme_get_setting('logo'); ?>" />
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td style="padding: 8px 10px;">
        <table width="95%" border="0" cellspacing="0" cellpadding="1" align="center" style="border:1px solid #BEBFB9;">
          <tbody>
            <tr>
              <td style="padding: 8px 10px;"><?php print '<strong>' . t('Account No') . ':</strong> ' .  $info['order_uid']; ?></td>
              <td style="padding: 8px 10px;"><?php print '<strong>' . t('Web Order No') . ':</strong> ' .  $info['order_number']; ?></td>
            </tr>
            <tr>
              <td style="padding: 8px 10px;"><?php print '<strong>' . t('Order Date') . ':</strong> ' .  date('j F, Y', $info['order_created']); ?></td>
              <td style="padding: 8px 10px;"><?php print '<strong>' . t('Email Address') . ':</strong> ' .  $info['order_mail']; ?></td>
            </tr>
            <tr>
              <td style="padding: 8px 10px;"><?php print '<strong>' . t('Billing Address') . ':</strong> ' .  $info['customer_billing']; ?></td>
              <td style="padding: 8px 10px;">
                <?php if(isset($info['customer_shipping']) && !empty($info['customer_shipping'])): ?>
                  <?php print '<strong>' . t('Shipping Address') . ':</strong> ' .  $info['customer_shipping']['address']; ?>
                <?php endif; ?>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td style="padding: 8px 10px;">
        <table class="products" width="95%" border="0" cellspacing="0" cellpadding="1" align="center" style="border:1px solid #BEBFB9;">
          <tbody>
            <tr>
              <td style="padding: 8px 10px;"><?php print $info['line_items']; ?></td>
            </tr>
            <tr>
              <td style="padding: 8px 10px;"><?php print $info['order_total'] ?></td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td style="padding: 8px 10px;">
        <table width="95%" border="0" cellspacing="0" cellpadding="1" align="center" style="border:1px solid #BEBFB9;">
          <tbody>
            <tr>
              <td style="text-align: center; padding: 8px 10px;"><strong><?php print t('PAYMENT RECEIVED WITH THANKS'); ?></strong></td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
