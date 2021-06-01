<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <body>
                <h1>
                    <xsl:value-of select="root/title"/>
                </h1>
                <table border="1">
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
                            <!--                            common-->
                            <xsl:choose>
                                <xsl:when test="starts-with(botanical,'P')">
                                    <td style="background-color:yellow">
                                        <xsl:value-of select="common"/>
                                    </td>
                                </xsl:when>
                                <xsl:when
                                        test="substring(common, (string-length(common) - string-length('корень')) + 1) = 'корень'">
                                    <td style="background-color:red">
                                        <xsl:value-of select="common"/>
                                    </td>
                                </xsl:when>
                                <xsl:when
                                        test="substring(common, (string-length(common) - string-length('к')) + 1) = 'к'">
                                    <td style="background-color:aqua">
                                        <xsl:value-of select="common"/>
                                    </td>
                                </xsl:when>
                                <xsl:when test="starts-with(botanical,'P')">
                                    <td style="background-color:yellow">
                                        <xsl:value-of select="botanical"/>
                                    </td>
                                </xsl:when>
                                <xsl:otherwise>
                                    <td>
                                        <xsl:value-of select="common"/>
                                    </td>
                                </xsl:otherwise>
                            </xsl:choose>
                            <!--                            end common-->

                            <!--                            botanical-->
                            <td>
                                <xsl:value-of select="botanical"/>
                            </td>
                            <!--                            end botanical-->

                            <!--                            zone-->
                            <td>
                                <xsl:choose>
                                    <xsl:when test="zone=3">
                                        <span style="color:red">
                                            <xsl:value-of select="zone"/>
                                        </span>
                                    </xsl:when>
                                    <xsl:when test="number(zone)!=zone">
                                        <span style="color:green">
                                            <xsl:value-of select="zone"/>
                                        </span>
                                    </xsl:when>
                                    <xsl:otherwise>
                                        <xsl:value-of select="zone"/>
                                    </xsl:otherwise>
                                </xsl:choose>
                            </td>
                            <!--                            end zone-->
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