<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<table id="world_data">
  <thead>
    <thead>
      <tr>
        <th>ID</th>
        <th><a id="sort-up"   class="fa fa-angle-up"   onclick="sort_table(asc)"></a>
            <a id="sort-down" class="fa fa-angle-down" onclick="sort_table(desc)"></a> Country
        </th>
        <th>birth rate / 1000</th>
        <th>cellphones / 100</th>
        <th>children / woman</th>
        <th>electric usage</th>
        <th>internet usage</th>
      </tr>
    </thead>
  </thead>
  <tbody>
    <xsl:for-each select="countries/country">
      <tr>
        <td><xsl:value-of select="id"/></td>
        <td><xsl:value-of select="name"/></td>
        <td><xsl:value-of select="birth_rate_per_1000"/></td>
        <td><xsl:value-of select="cell_phones_per_100"/></td>
        <td><xsl:value-of select="children_per_woman"/></td>
        <td><xsl:value-of select="electricity_consumption_per_capita"/></td>
        <td><xsl:value-of select="internet_user_per_100"/></td>
      </tr>
    </xsl:for-each>
  </tbody>
</table>
</xsl:template>
</xsl:stylesheet>
