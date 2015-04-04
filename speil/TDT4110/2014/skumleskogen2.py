# encoding: utf-8
keys = 0
cur = None # current node

# En node er en dictionary med følgende felt:
def make_node(number):
  return {"number":number, "label":None, "parent":None, "left":None, "right":None}

def set_arc(from_node, arc, to_node):
  from_node[arc] = to_node
  to_node["parent"] = from_node

def move_to(to_node):
  global cur
  if cur["label"] in ('L', 'SL') and to_node in (cur["left"], cur["right"]):
    print("Du kan ikke gå videre fra denne låsnoden uten å låse opp først!")
    return False
  elif to_node == None:
    print("Dette er en blindvei.")
    return False
  elif to_node["label"] == 'K':
    raise Exception("Du ble spist av en kanin!")

  cur = to_node
  return True

def label(n): # DEBUG
  return nodes[n]["label"]

nodes = [ make_node(i) for i in range(100) ]
nodes[0]["label"] = "INN"
set_arc(nodes[0], "left", nodes[1])
set_arc(nodes[0], "right", nodes[2])
nodes[2]["label"] = "N"
set_arc(nodes[1], "left", nodes[3])
set_arc(nodes[1], "right", nodes[4])
set_arc(nodes[2], "left", nodes[5])
nodes[5]["label"] = "S"
set_arc(nodes[2], "right", nodes[6])
set_arc(nodes[3], "left", nodes[7])
set_arc(nodes[3], "right", nodes[8])
set_arc(nodes[4], "left", nodes[9])
set_arc(nodes[4], "right", nodes[10])
set_arc(nodes[5], "left", nodes[11])
nodes[11]["label"] = "K"
set_arc(nodes[5], "right", nodes[12])
set_arc(nodes[6], "left", nodes[13])
set_arc(nodes[6], "right", nodes[14])
set_arc(nodes[7], "left", nodes[15])
nodes[15]["label"] = "L"
set_arc(nodes[7], "right", nodes[16])
nodes[16]["label"] = "N"
set_arc(nodes[8], "left", nodes[17])
set_arc(nodes[8], "right", nodes[18])
set_arc(nodes[9], "left", nodes[19])
set_arc(nodes[9], "right", nodes[20])
set_arc(nodes[10], "left", nodes[21])
set_arc(nodes[11], "left", nodes[22])
nodes[22]["label"] = "S"
set_arc(nodes[11], "right", nodes[23])
nodes[23]["label"] = "S"
set_arc(nodes[13], "left", nodes[24])
set_arc(nodes[14], "left", nodes[25])
nodes[25]["label"] = "L"
set_arc(nodes[14], "right", nodes[26])
set_arc(nodes[15], "left", nodes[27])
set_arc(nodes[16], "left", nodes[28])
set_arc(nodes[17], "left", nodes[29])
set_arc(nodes[17], "right", nodes[30])
set_arc(nodes[18], "left", nodes[31])
set_arc(nodes[18], "right", nodes[32])
set_arc(nodes[19], "left", nodes[33])
set_arc(nodes[20], "left", nodes[34])
nodes[34]["label"] = "S"
set_arc(nodes[20], "right", nodes[35])
nodes[35]["label"] = "N"
set_arc(nodes[23], "left", nodes[36])
set_arc(nodes[24], "left", nodes[37])
set_arc(nodes[24], "right", nodes[38])
set_arc(nodes[25], "left", nodes[39])
set_arc(nodes[25], "right", nodes[40])
nodes[40]["label"] = "S"
set_arc(nodes[26], "left", nodes[41])
set_arc(nodes[29], "left", nodes[42])
set_arc(nodes[29], "right", nodes[43])
set_arc(nodes[30], "left", nodes[44])
set_arc(nodes[30], "right", nodes[45])
set_arc(nodes[31], "left", nodes[46])
set_arc(nodes[31], "right", nodes[47])
set_arc(nodes[32], "left", nodes[48])
nodes[48]["label"] = "S"
set_arc(nodes[32], "right", nodes[49])
nodes[49]["label"] = "S"
set_arc(nodes[34], "left", nodes[50])
nodes[50]["label"] = "K"
set_arc(nodes[35], "left", nodes[51])
set_arc(nodes[35], "right", nodes[52])
set_arc(nodes[36], "left", nodes[53])
set_arc(nodes[39], "left", nodes[54])
set_arc(nodes[39], "right", nodes[55])
nodes[55]["label"] = "L"
set_arc(nodes[40], "left", nodes[56])
nodes[56]["label"] = "K"
set_arc(nodes[40], "right", nodes[57])
nodes[57]["label"] = "N"
set_arc(nodes[41], "left", nodes[58])
set_arc(nodes[42], "left", nodes[59])
nodes[59]["label"] = "SL"
set_arc(nodes[43], "left", nodes[60])
set_arc(nodes[44], "left", nodes[61])
set_arc(nodes[45], "left", nodes[62])
set_arc(nodes[45], "right", nodes[63])
set_arc(nodes[48], "left", nodes[64])
nodes[64]["label"] = "K"
set_arc(nodes[49], "left", nodes[65])
nodes[65]["label"] = "K"
set_arc(nodes[49], "right", nodes[66])
set_arc(nodes[53], "left", nodes[67])
set_arc(nodes[54], "left", nodes[68])
set_arc(nodes[54], "right", nodes[69])
set_arc(nodes[55], "left", nodes[70])
nodes[70]["label"] = "N"
set_arc(nodes[56], "left", nodes[71])
set_arc(nodes[57], "left", nodes[72])
set_arc(nodes[58], "left", nodes[73])
set_arc(nodes[59], "left", nodes[74])
nodes[74]["label"] = "SL"
set_arc(nodes[61], "left", nodes[75])
set_arc(nodes[62], "left", nodes[76])
set_arc(nodes[62], "right", nodes[77])
set_arc(nodes[63], "left", nodes[78])
nodes[78]["label"] = "L"
set_arc(nodes[64], "left", nodes[79])
nodes[79]["label"] = "N"
set_arc(nodes[65], "left", nodes[80])
nodes[80]["label"] = "S"
set_arc(nodes[66], "left", nodes[81])
set_arc(nodes[66], "right", nodes[82])
set_arc(nodes[68], "left", nodes[83])
nodes[83]["label"] = "N"
set_arc(nodes[69], "left", nodes[84])
set_arc(nodes[70], "left", nodes[85])
nodes[85]["label"] = "N"
set_arc(nodes[74], "left", nodes[86])
nodes[86]["label"] = "UT"
set_arc(nodes[76], "left", nodes[87])
set_arc(nodes[77], "left", nodes[88])
set_arc(nodes[78], "left", nodes[89])
nodes[89]["label"] = "N"
set_arc(nodes[79], "left", nodes[90])
nodes[90]["label"] = "N"
set_arc(nodes[80], "left", nodes[91])
nodes[91]["label"] = "K"
set_arc(nodes[80], "right", nodes[92])
nodes[92]["label"] = "K"
set_arc(nodes[83], "left", nodes[93])
set_arc(nodes[88], "left", nodes[94])
set_arc(nodes[89], "left", nodes[95])
set_arc(nodes[89], "right", nodes[96])
nodes[96]["label"] = "N"
set_arc(nodes[95], "left", nodes[97])
set_arc(nodes[95], "right", nodes[98])
set_arc(nodes[96], "left", nodes[99])

cur = nodes[0] # Current node er INN

# Public interface ;>
__all__ = ["label", "nummer", "er_vanlig", "er_stank", "er_nokkel", "er_laas", "er_superlaas", "er_inngang", "er_utgang", "gaa_tilbake", "gaa_venstre", "gaa_hoyre", "gaa_ut", "plukk_opp", "laas_opp"]

def nummer():
  return cur["number"]

def er_vanlig():
  return cur["label"] == None

def er_stank():
  return cur["label"] == 'S'

def er_nokkel():
  return cur["label"] == 'N'

def er_laas():
  return er_superlaas() or cur["label"] == 'L'

def er_superlaas():
  return cur["label"] == 'SL'

def er_inngang():
  return cur["label"] == 'INN'

def er_utgang():
  return cur["label"] == 'UT'

def gaa_tilbake():
  return move_to(cur["parent"])

def gaa_venstre():
  return move_to(cur["left"])

def gaa_hoyre():
  return move_to(cur["right"])

def gaa_ut():
  if cur["label"] == 'UT':
    print("Du løste labyrinten. Gratulerer!")
    return True

  if cur["label"] == 'INN':
    print("Du er ved inngangen til labyrinten, men kaninene har sperret veien ut!")
  else:
    print("Det finnes ingen utgang her ...")

  return False

def plukk_opp():
  if not er_nokkel():
    print("Det finnes ingen nøkkel her.")
    return False

  global keys
  keys += 1
  cur["label"] = None
  return True

def laas_opp():
  if not er_laas():
    print("Denne noden er ikke en lås.")
    return False
  
  global keys

  if er_superlaas() and keys < 2:
    print("Du kan ikke låse opp denne superlåsen uten minst to nøkler.")
    return False
  elif keys < 1:
    print("Du kan ikke låse opp denne låsen uten en nøkkel.")
    return False

  if not er_superlaas():
    keys -= 1
  else:
    keys -= 2

  cur["label"] = None
  return True
