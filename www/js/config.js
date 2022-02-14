"use strict";

var EngagedNation = EngagedNation || {};

if (!EngagedNation.hasOwnProperty("Config")) {
    EngagedNation.Config = {};
}

if (!EngagedNation.Config.hasOwnProperty("requireJS")) {
    EngagedNation.Config.requireJS = {};
}

/* Use the extended version of lbxgrid for Siver Reef */
EngagedNation.Config.requireJS = {
    "paths" : {
        "lbxgrid": "js/lib/lbxgrid",
        "coinanim": "js/lib/coinanim"
    }
};
