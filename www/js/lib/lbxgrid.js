/**
 * Silver Reef version of lbxgrid
 *
 * @author Matthew Kosolofski <matthew.kosolofski@engagednation.com>
 */

"use strict";

EngagedNation.RequireJS.define(
    ["jquery_1_10", "lbxgridBase"],
    function($, LbxGrid)
    {
        /**
         * Construct.
         *
         * @param object|null config Config overrides.
         */
        var SilverReefLbxGrid = function(config)
        {
            this.config = {
                wrapperContainerMarginTop: $('.gdlr-header-wrapper').height() + "px"
            };

            /* LbxGrid will apply the config, no need to do this here */
            LbxGrid.apply(this, arguments);
        };

        /**
         * Add methods
         */
        SilverReefLbxGrid.prototype = $.extend(
            Object.create(LbxGrid.prototype),
            {
                /* Methods here that you may want to override/add. */
            }
        );

        /**
         * Extend jQuery with with the Silver Reef version of lbxGrid.
         */
        $.fn.lbxgrid = function(config)
        {
            EngagedNation.jQuery.extensions.SilverReefLbxGrid = new SilverReefLbxGrid(config);
        };

        $.lbxgrid = function(config)
        {
            EngagedNation.jQuery.extensions.SilverReefLbxGrid = new SilverReefLbxGrid(config);
        };

        return SilverReefLbxGrid;
    }
);
