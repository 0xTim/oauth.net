<?php
$page_title = "OAuth 2.0 Refresh Token";
$page_section = "";
$page_secondary = "";
$page_meta_description = "The OAuth 2.0 refresh token grant type";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Refresh Token</li>
    </ol>
  </nav>

  <div>

    <h2>OAuth 2.0 Refresh Token</h2>

    <?php require('../../../includes/_carbon.php'); ?>

    <p><a href="https://tools.ietf.org/html/rfc6749#section-1.5" class="rfc">RFC 6749 §1.5</a></p>

    <p>The Refresh Token grant type is used by clients to exchange a refresh token for an access token when the access token has expired.</p>
    <p>This allows clients to continue to have a valid access token without further interaction with the user.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/refreshing-access-tokens/">Refreshing Access Tokens</a> (oauth.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
