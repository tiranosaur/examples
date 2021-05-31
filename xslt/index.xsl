<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <body>
                <h1>
                    <xsl:value-of select="root/title"/>
                </h1>
                <table border="1" >
                    <tr style="background-color:green; color:white;">
                        <th>common</th>
                        <th>botanical</th>
                        <th>zone</th>
                        <th>light</th>
                        <th>price</th>
                        <th>availability</th>
                    </tr>
                    <xsl:for-each select="root/catalog/plant">
                        <tr>
                            <td>
                                <xsl:value-of select="common"/>
                            </td>
                            <td>
                                <xsl:value-of select="botanical"/>
                            </td>
                            <td>
                                <xsl:value-of select="zone"/>
                            </td>
                            <td>
                                <xsl:value-of select="light"/>
                            </td>
                            <td>
                                <xsl:value-of select="price"/>
                            </td>
                            <td>
                                <xsl:value-of select="availability"/>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>